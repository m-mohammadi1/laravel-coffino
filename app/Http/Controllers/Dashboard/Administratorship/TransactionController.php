<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\PurchasedService;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class TransactionController extends Controller
{

    public function index()
    {
        $this->authorize('manage', Transaction::class);

        $transactions = QueryBuilder::for(Transaction::class)
            ->allowedFilters(array_merge(
                array_keys(Transaction::FILTER_ITEMS), [AllowedFilter::exact('id'), AllowedFilter::exact('transaction_id'), 'status']
            ))
            ->allowedSorts(array_keys(Transaction::FILTER_ITEMS))
            ->paginate(10)
            ->appends(request()->query());

        $statuses = $this->getTransactionStatusArray();
        $filter_items = $this->getTransactionFilterItemsArray();

        return view('dashboard.transactions.index', compact('transactions', 'statuses', 'filter_items'));
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Transaction $transaction)
    {
        $this->authorize('see', $transaction);

        $transaction->load(['user', 'service']);
        return response()->json([
            'data' => $transaction,
            'status' => 'success',
            'update_route' => route('dashboard.transactions.update', $transaction->id),
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Transaction $transaction): \Illuminate\Http\JsonResponse
    {
        $this->authorize('edit', $transaction);

        if (!$request->ajax()) {
            return response()->json([
                'message' => 'درخواست نامعتبر است دوباره تلاش کنید',
                'status' => 'error',
            ]);
        }


        if ($transaction->update($request->only('status'))) {

            $this->changePurchasedServiceBasedOnTransactionStatus($transaction);

            return $this->updateTransactionSuccessResponse($transaction);
        }

        return response()->json([
            'message' => 'مشکلی در اجرای درخواست شما بوجود آمد لطفا دوباره امتحان کنید',
            'status' => 'error',
        ]);
    }

    private function changePurchasedServiceBasedOnTransactionStatus($transaction)
    {
        $user = User::find($transaction->user_id);

        if ($transaction->status == $transaction::STATUS['success']) {

            $user->purchasedServices()->updateOrCreate(
                [
                    'transaction_id' => $transaction->id,
                    'user_id' => $user->id,
                ],
                [
                    'service_id' => $transaction->service_id,
                    'service_count' => $transaction->service_count,
                    'service_link' => $transaction->service_link,
                    'status' => PurchasedService::STATUS['pending'],
                    'transaction_id' => $transaction->id
                ]
            );

            return ;
        }

        $purchased_service = $user->purchasedServices()
            ->where('transaction_id', $transaction->id)
            ->where('user_id', $transaction->user_id)
            ->first();
        if ($purchased_service) {
            $purchased_service->delete();
        }
    }

    private function updateTransactionSuccessResponse($transaction): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'تراکنش با موفقیت بروزرسانی شد',
            'status' => 'success',
            'data' => [
                'transaction_id' => $transaction->id,
                'status_text' => $transaction->getStatusText(),
            ]
        ]);
    }

    private function getTransactionStatusArray(): array
    {
        $statuses = [];
        foreach (Transaction::STATUS as $text => $code) {
            $statuses[$code] = Transaction::getStatusTextByCode($code);
        }
        return $statuses;
    }

    private function getTransactionFilterItemsArray()
    {
        $filter_items = [];
        foreach (Transaction::FILTER_ITEMS as $column => $name) {
            $filter_items[$column] = $name;
        }
        return $filter_items;
    }


}
