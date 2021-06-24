<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\PurchasedService;
use Illuminate\Http\Request;

class PurchasedServiceController extends Controller
{
    public function index()
    {
        $this->authorize('manage', PurchasedService::class);

        $purchased_services = PurchasedService::paginate(10);
        $purchased_services->load('user');

        return view('dashboard.purchased.index', compact('purchased_services'));
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
            return response()->json([
                'message' => 'تراکنش با موفقیت بروزرسانی شد',
                'status' => 'success',
                'data' => [
                    'service_id' => $purchase->id,
                    'status_text' => $purchase->getStatusText(),
                ]
            ]);
        }

        return response()->json([
            'message' => 'مشکلی در اجرای درخواست شما بوجود آمد لطفا دوباره امتحان کنید',
            'status' => 'error',
        ]);

    }


}
