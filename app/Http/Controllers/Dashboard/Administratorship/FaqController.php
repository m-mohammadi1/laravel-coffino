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
        $faqs = Faq::paginate(Faq::PAGINATE_COUNT);
        return view('dashboard.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('dashboard.faqs.create');
    }


    public function store(StoreFaqRequest $request)
    {
        Faq::create($request->validated());

        return redirect()->route('dashboard.faqs.index')->with('toastr_success', 'عملیات ایجاد سوال موفقیت آمیز بود');
    }

    public function edit(Faq $faq)
    {
        return view('dashboard.faqs.edit', compact('faq'));
    }


    public function update(StoreFaqRequest $request, Faq $faq)
    {
        $faq->update($request->validated());
        return redirect()->route('dashboard.faqs.index')->with('toastr_success', 'عملیات آپدیت سوال موفقیت آمیز بود');
    }


    public function destroy(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('dashboard.faqs.index')->with('toastr_success', 'عملیات حذف موفقیت آمیز بود');
    }
}
