<?php

namespace App\Http\Controllers\Dashboard\Purchase;

use Exception;
use SoapFault;
use Throwable;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use App\Http\Controllers\Controller;
use App\Models\PurchasedService;
use Dotenv\Exception\InvalidPathException;
use Illuminate\Support\Facades\Auth;
use Shetabit\Payment\Facade\Payment;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function purchase($serivce_id)
    {
        try {
            $serivce = Service::find($serivce_id);

            $service_count = 3;
            $total_amount = (int)$serivce->price * $service_count;

            $invoice = new Invoice();
            $invoice->amount($total_amount);


            $user = Auth::user();
            $paymentId = md5(uniqid());
            $transaction = $user->transactions()->create([
                'service_id' => $serivce->id,
                'service_count' => $service_count,
                'paid' => $invoice->getAmount(),
                'invoice_details' => $invoice,
                'payment_id' => $paymentId,
            ]);


            $callbackUrl = route('services.purchase.result', [$serivce->id, 'payment_id' => $paymentId]);

            $payment = Payment::callbackUrl($callbackUrl);
            $payment->config('description', 'خرید سرویس');


            $payment->purchase($invoice, function ($driver, $transactionId) use ($transaction) {
                $transaction->transaction_id;
                $transaction->save();
            });

            return $payment->pay()->render();
        } catch (PurchaseFailedException | Exception | Throwable | SoapFault $e) {
            $error = [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'file' => $e->getFile() ?: null,
            ];
            $transaction->transaction_result = $error;
            $transaction->status = 0;
            $transaction->save();
        }
    }

    public function result(Request $request, $service_id)
    {
        $service = Service::findOrFail($service_id);

        // $service_exists_in_purchased = PurchasedService::where('user_id', Auth::id())->where('service_id', $serivce->id)->where(function ($query) {
        //     return $query->where('status', PurchasedService::STATUS_PENDING)
        //                     ->where('status', PurchasedService::STATUS_PROGRESS);
        // })->exists();
        // complete later

        
        if ($request->missing('payment_id')) {
            dd('payment id missing');
            // return view('result')->with('error', '');
        }
        $transaction = Transaction::where('payment_id', $request->payment_id)->first();

        if (empty($transaction)) {
            dd('transaction not found');
        }

        if ($transaction->user_id <> Auth::id()) {
            dd('user not match');
        }

        if ($transaction->service_id <> $service->id) {
            dd('user not match');
        }

        if ($transaction->status <> Transaction::STATUS_PENDING) {
            dd('transacon not pending');
        }

        try {
            $receipt = Payment::amount($transaction->paid)
                ->transactionId($transaction->transaction_id)
                ->verify();

            $transaction->transaction_result = $receipt;
            $transaction->status = Transaction::STATUS_SUCCESS;
            $transaction->save();

            Auth::user()->purchasedServices()->create([
                'service_id' => $service->id,
                'service_count' => $transaction->service_count,
                'status' => PurchasedService::STATUS_PENDING,
            ]);
            
            dd('OK');
            // return view('transactions'); 
        } catch (InvalidPathException | Exception $e) {
            if ($e->getCode() < 0) {
                $transaction->status = Transaction::STATUS_FAILED;

                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode(),
                ];
            }
            dd($e);
            dd('transaction failed');
            // return view('');
        }
    }
}
