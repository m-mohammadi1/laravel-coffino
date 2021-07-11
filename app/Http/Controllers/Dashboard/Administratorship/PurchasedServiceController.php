<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\PurchasedService;
use App\Providers\ShouldMessage;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class PurchasedServiceController extends Controller
{
    public function index()
    {
        $this->authorize('manage', PurchasedService::class);

        $purchased_services = $this->getFilteredPurchasedServices();
        $purchased_services->load('user');
        $filter_items = PurchasedService::FILTER_ITEMS;
        $statuses = $this->getTransactionStatusArray();

        return view('dashboard.purchased.index', compact('purchased_services', 'filter_items', 'statuses'));
    }


    private function getTransactionStatusArray(): array
    {
        $statuses = [];
        foreach (PurchasedService::STATUS as $text => $code) {
            $statuses[$code] = PurchasedService::getStatusTextByCode($code);
        }
        return $statuses;
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(PurchasedService $purchase)
    {
        $this->authorize('see', $purchase);

        $purchase->load(['user', 'service']);
        return response()->json([
            'data' => $purchase,
            'status' => 'success',
            'update_route' => route('dashboard.purchases.update', $purchase->id),
        ]);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, PurchasedService $purchase): \Illuminate\Http\JsonResponse
    {
        $this->authorize('edit', $purchase);

        if (!$request->ajax()) {
            return response()->json([
                'message' => 'درخواست نامعتبر است دوباره تلاش کنید',
                'status' => 'error',
            ]);
        }

        if ($purchase->update($request->only('status'))) {
            $message = [
                'title' => 'تغییر وضعیت سرویس درخواستی' ,
                'message' => 'وضغیت سرویس شما تفییر کرذ',
                'user_id' => $purchase->user_id
            ];

            event(new ShouldMessage($message));


            return $this->getResponseOnStatusUpdate($purchase);
        }

        return response()->json([
            'message' => 'مشکلی در اجرای درخواست شما بوجود آمد لطفا دوباره امتحان کنید',
            'status' => 'error',
        ]);
    }

    private function getFilteredPurchasedServices(): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return QueryBuilder::for(PurchasedService::class)
            ->allowedFilters(array_merge(
                array_keys(PurchasedService::FILTER_ITEMS), [AllowedFilter::exact('id'), AllowedFilter::exact('service_link'), 'status']
            ))
            ->allowedSorts(array_keys(PurchasedService::FILTER_ITEMS))
            ->paginate(10)
            ->appends(request()->query());
    }

    public function getResponseOnStatusUpdate(PurchasedService $purchase): \Illuminate\Http\JsonResponse
    {
        return response()->json([
            'message' => 'تراکنش با موفقیت بروزرسانی شد',
            'status' => 'success',
            'data' => [
                'service_id' => $purchase->id,
                'status_text' => $purchase->getStatusText(),
            ]
        ]);
    }


}
