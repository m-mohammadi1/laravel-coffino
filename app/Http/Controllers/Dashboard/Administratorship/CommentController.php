<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $comments = Comment::with('user')->paginate(10);
        return view('dashboard.comments.index', compact('comments'));
    }


    public function update(Request $request, Comment $comment)
    {
        $comment->status = $comment->status == Comment::STATUS['confirmed'] ? Comment::STATUS['unconfirmed'] : Comment::STATUS['confirmed'];
        $comment->save();

        return back()->with('toastr_success', 'وضعیت نظر با موفقیت آپدیت شد');
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
