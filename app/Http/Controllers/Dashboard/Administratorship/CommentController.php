<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function index()
    {
        $this->authorize('manage', Comment::class);

        $comments = Comment::with('user')->orderByDesc('id')->paginate(10);
        return view('dashboard.comments.index', compact('comments'));
    }


    public function update(Request $request, Comment $comment)
    {
        $this->authorize('edit', Comment::class);

        $comment->status = $comment->status == Comment::STATUS['confirmed'] ? Comment::STATUS['unconfirmed'] : Comment::STATUS['confirmed'];
        $comment->save();

        return back()->with('toastr_success', 'وضعیت نظر با موفقیت آپدیت شد');
    }


    public function destroy(Comment $comment)
    {
        $this->authorize('delete', Comment::class);

        $comment->delete();
        return back()->with('toastr_success', 'حذف با موفقیت انجام شد پسر شایدم دختر');
    }
}
