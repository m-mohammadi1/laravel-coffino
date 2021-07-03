<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CommentController extends Controller
{

    public function index()
    {
        $this->authorize('manage', Comment::class);

        $comments = QueryBuilder::for(Comment::class)
            ->allowedFilters(array_merge(
                array_keys(Comment::FILTER_ITEMS), [AllowedFilter::exact('id'), 'status']
            ))
            ->allowedSorts(array_keys(Comment::FILTER_ITEMS))
            ->paginate(10)
            ->appends(request()->query());

        $filter_items = Comment::FILTER_ITEMS;
        $statuses = $this->getCommentsStatusArray();

        return view('dashboard.comments.index', compact('comments', 'filter_items', 'statuses'));
    }

    private function getCommentsStatusArray(): array
    {
        $statuses = [];
        foreach (Comment::STATUS as $text => $code) {
            $statuses[$code] = Comment::getStatusTextByCode($code);
        }
        return $statuses;
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
