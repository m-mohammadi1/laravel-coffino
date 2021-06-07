<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CountPolicy
{
    use HandlesAuthorization;

    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage count');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create count');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit count');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see count');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete count');
    }
}
