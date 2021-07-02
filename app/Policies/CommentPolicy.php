<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentPolicy
{
    use HandlesAuthorization;

    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage comment');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create comment');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit comment');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see comment');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete comment');
    }
}
