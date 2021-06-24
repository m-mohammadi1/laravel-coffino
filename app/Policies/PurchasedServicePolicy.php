<?php

namespace App\Policies;

use App\Models\PurchasedService;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PurchasedServicePolicy
{
    use HandlesAuthorization;

    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage purchased_service');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create purchased_service');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit purchased_service');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see purchased_service');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete purchased_service');
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function customer_manage(User $user)
    {
        return auth()->id() === $user->id;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Transaction  $transaction
     * @return mixed
     */
    public function customer_see(User $user, PurchasedService $service)
    {
        return
            auth()->id() === $user->id
            && $user->service()->find($service->id)
            && $service->user()->id === $user->id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function customer_create(User $user)
    {
        return
            auth()->id() === $user->id;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Transaction  $transaction
     * @return mixed
     */
    public function customer_update(User $user, PurchasedService $service)
    {
        return
            auth()->id() === $user->id
            && $user->transaction()->find($service->id)
            && $service->user()->id === $user->id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Transaction  $transaction
     * @return mixed
     */
    public function customer_delete(User $user, PurchasedService $service)
    {
        return
            auth()->id() === $user->id
            && $user->transaction()->find($service->id)
            && $service->user()->id === $user->id;
    }
}
