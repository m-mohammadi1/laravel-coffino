<?php

namespace App\Http\Controllers\Dashboard\CustomerManagement;

use App\Http\Controllers\Controller;
use App\Models\PurchasedService;
use Illuminate\Http\Request;

class PurhchasedServicesCntroller extends Controller
{

    public function index()
    {
        $this->authorize('customer_manage', PurchasedService::class);

        $services = PurchasedService::all();



        return view('dashboard.customers.purchased.index', compact('services'));
    }








}
