<?php

namespace App\Http\Controllers\Dashboard\CustomerManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = auth()->user()->transactions;

        $transactions->load('service');

        return view('dashboard.customers.transactions.index', compact('transactions'));
    }
}
