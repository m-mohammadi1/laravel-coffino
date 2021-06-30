<?php

namespace App\Http\Controllers\Dashboard\CustomerManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    public function create()
    {
        return view('dashboard.customers.comments.create');
    }

    public function store(StoreCommentRequest $request)
    {
        Auth::user()->comments()->create($request->validated());

        return redirect()->route('dashboard.index')->with('toastr_success', 'نظر شما با موفقیت ثبت شد و پس از تایید منتشر می شود');
    }
}
