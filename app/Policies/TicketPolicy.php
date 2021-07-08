<?php

namespace App\Policies;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TicketPolicy
{
    use HandlesAuthorization;


    /* admin policies */
    public function manage()
    {
        return auth()->user() && auth()->user()->can('manage ticket');
    }

    public function create()
    {
        return auth()->user() && auth()->user()->can('create ticket');
    }


    public function edit()
    {
        return auth()->user() && auth()->user()->can('edit ticket');
    }

    public function see()
    {
        return auth()->user() && auth()->user()->can('see ticket');
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete ticket');
    }
    /* end admin policies */


    /* normal user policies */

    public function customer_manage(User $user)
    {
        return
            auth()->user()->hasRole('customer') &&
            auth()->id() == $user->id;
    }

    public function customer_create(User $user)
    {
        return
            auth()->user()->hasRole('customer') &&
            auth()->id() == $user->id;
    }

    public function customer_see(User $user, Ticket $ticket)
    {
        return
            auth()->id() === $user->id &&
            auth()->user()->hasRole('customer') &&
            $user->asked_tickets()->find($ticket->id);
    }

    public function customer_update(User $user, Ticket $ticket)
    {
        return
            auth()->id() === $user->id
            && $user->asked_tickets()->find($ticket->id);
    }


    public function customer_delete(User $user, Ticket $ticket)
    {
        return false;
    }

}
