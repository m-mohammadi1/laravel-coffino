<?php

namespace App\Policies;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TransactionPolicy
{
    use HandlesAuthorization;

    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage transaction');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create transaction');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit transaction');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see transaction');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete transaction');
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
    public function customer_see(User $user, Transaction $transaction)
    {
        return
            auth()->id() === $user->id
            && $user->transaction()->find($transaction->id);
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
    public function customer_update(User $user, Transaction $transaction)
    {
        return
            auth()->id() === $user->id
            && $user->transaction()->find($transaction->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Transaction  $transaction
     * @return mixed
     */
    public function customer_delete(User $user, Transaction $transaction)
    {
        return
            auth()->id() === $user->id
            && $user->transaction()->find($transaction->id);
    }

}
