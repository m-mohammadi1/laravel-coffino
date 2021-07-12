<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class NotificationPolicy
{
    use HandlesAuthorization;


    public function create()
    {
        return auth()->user() && auth()->user()->can('create notification');
    }

}
