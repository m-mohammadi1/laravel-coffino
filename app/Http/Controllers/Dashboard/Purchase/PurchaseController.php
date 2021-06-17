<?php

namespace App\Http\Controllers\Dashboard\Purchase;

use Exception;
use SoapFault;
use Throwable;
use ErrorException;
use App\Models\Service;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use App\Models\PurchasedService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Shetabit\Payment\Facade\Payment;
use Dotenv\Exception\InvalidPathException;
use App\Http\Requests\PurchaseServiceRequest;
use Shetabit\Multipay\Exceptions\PurchaseFailedException;

class PurchaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function purchase(PurchaseServiceRequest $request)
    {
        $validated = (object)$request->validated();
        $serivce_id = $validated->service;

        try {
            $serivce = Service::findOrFail($serivce_id);
            $service_count = $this->getServiceCount($request, $validated);
    
            

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

            $callbackUrl = route('dashboard.customers.services.purchase.result', [$serivce->id, 'payment_id' => $paymentId]);
            $payment = Payment::callbackUrl($callbackUrl);
            $payment_description = 'خرید ' . $service_count . ' عدد سرویس با قیمت هر واحد : ' . $serivce->price;
            $payment->config('description', $payment_description);

            $payment->purchase($invoice, function ($driver, $transactionId) use ($transaction) {
                $transaction->transaction_id = $transactionId;
                $transaction->save();
            });

            return $payment->pay()->render();
        } catch (PurchaseFailedException | Exception | Throwable | SoapFault | ErrorException $e) {
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
            $error = 'آیدی سفارش نامعتبر می باشد';
            return view('dashboard.purchases.error', compact('error'));
        }
        $transaction = Transaction::where('payment_id', $request->payment_id)->first();

        if (empty($transaction)) {
            $error = 'سفارش یافت نشد';
            return view('dashboard.purchases.error', compact('error'));
        }

        if ($transaction->user_id <> Auth::id()) {
            $error = 'کاربر وارد شده با کاربر ثبت کننده سفارش یکی نیست';
            return view('dashboard.purchases.error', compact('error'));
        }

        if ($transaction->service_id <> $service->id) {
            $error = 'سرویس ثبت شده در سفارش معتبر نمی باشد';
            return view('dashboard.purchases.error', compact('error'));
        }

        if ($transaction->status <> Transaction::STATUS_PENDING) {
            $error = 'وضعیت تراکنش نامعتبر می باشد';
            return view('dashboard.purchases.error', compact('error'));
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
            
            $success = 'سفارش شما با موفقیت ثبت شد و در حال بررسی است';
            return view('dashboard.purchases.verify', compact('success'));
            // return view('transactions'); 
        } catch (InvalidPathException | Exception $e) {
            if ($e->getCode() < 0) {
                $transaction->status = Transaction::STATUS_FAILED;

                $transaction->transaction_result = [
                    'message' => $e->getMessage(),
                    'code' => $e->getCode(),
                ];
                $transaction->save();
            }            

            $error = 'سفارش شما با خطا مواجه شد';
            return view('dashboard.purchases.error', compact('error'));
            // return view('');
        }
    }


    private function getServiceCount($request, $validated) {
        if ($request->has('count')) {
            $service_count = $validated->count;

        } else {
            $service_count = $validated->optional_count;

        }
        return $service_count;
    }

    
}
