<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\SingleOption;
use Illuminate\Http\Request;

class SingleOptionController extends Controller
{

    public function index()
    {
        $options = SingleOption::all();
        return view('dashboard.single-options.index', compact('options'));
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
    public function show($id)
    {

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



    public function update(Request $request, SingleOption $single_option)
    {
        if (array_key_exists($single_option->name, $request->all())) {
            $single_option->update([
                'value' => $request->{$single_option->name}
            ]);

            return back()->with('toastr_success', 'بروزرسانی با موفقیت انجام شد');
        }

        return back()->with('toastr_error', 'عملیات ناموفق');

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
