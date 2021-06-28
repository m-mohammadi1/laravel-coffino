<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FaqPolicy
{
    use HandlesAuthorization;


    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage faq');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create faq');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit faq');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see faq');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete faq');
    }

}
