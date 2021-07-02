<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SingleOptionPolicy
{
    use HandlesAuthorization;

    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage single_option');
    }

    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit single_option');
    }

}
