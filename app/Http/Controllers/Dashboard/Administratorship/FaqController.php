<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        return view('dashboard.faqs.create');
    }


    public function store(StoreFaqRequest $request)
    {
        Faq::create($request->validated());

        return back()->with('toastr_success', 'عملیات موفقیت آمیز بود');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
