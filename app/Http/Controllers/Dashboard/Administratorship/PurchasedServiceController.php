<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\PurchasedService;
use Illuminate\Http\Request;

class PurchasedServiceController extends Controller
{
    public function index()
    {
        $purchased_services = PurchasedService::all();
        $purchased_services->load('user');

        return view('dashboard.purchased.index', compact('purchased_services'));
    }



    public function show(Request $request, PurchasedService $service)
    {
        dd($service);

//        return response()->json([
//            'data' => $service,
//            'status' => 'success',
//            'update_route' => route('dashboard.purchases.update', $service->id),
//        ])

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
