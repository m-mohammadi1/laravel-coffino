<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;


    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage category');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create category');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit category');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see category');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete category');
    }


}
