<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;

    
    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage service');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create service');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit service');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see service');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete service');
    }
    
}
