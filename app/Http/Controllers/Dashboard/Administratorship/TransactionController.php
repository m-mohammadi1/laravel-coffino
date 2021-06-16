<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
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
        $transactions = Transaction::paginate(10);

        return view('dashboard.transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        $transaction->load(['user', 'service']);
        return response()->json([
            'data' => $transaction,
            'status' => 'success',
            'update_route' => route('dashboard.transactions.update', $transaction->id),
        ]);
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
    public function update(Request $request, Transaction $transaction)
    {
        if (!$request->ajax()) {
            return response()->json([
                'message' => 'درخواست نامعتبر است دوباره تلاش کنید',
                'status' => 'error',
            ]);
        }

        
        if ($transaction->update($request->only('status'))) {
            return response()->json([
                'message' => 'تراکنش با موفقیت بروزرسانی شد',
                'status' => 'success',
                'data' => [
                    'transaction_id' => $transaction->id,
                    'status_text' => $transaction->getStatusText(),
                ]
            ]);
        }


        return response()->json([
            'message' => 'مشکلی در اجرای درخواست شما بوجود آمد لطفا دوباره امتحان کنید',
            'status' => 'error',
        ]);

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
