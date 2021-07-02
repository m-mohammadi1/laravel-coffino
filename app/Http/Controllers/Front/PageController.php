<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $comments = Comment::with('user')->where('status', '1')->take(10)->get();

        return view('front.index', compact('comments'));
    }


}
