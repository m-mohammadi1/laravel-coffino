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

    public function edit(User $user, Ticket $ticket)
    {
        $user_can_responded_to_ticket = false;
        if (!isset($ticket->responded_user_id)) {
            $user_can_responded_to_ticket = true;
        }

        if ($ticket->responded_user_id == auth()->id()) {
            $user_can_responded_to_ticket = true;
        }

        return
            auth()->user() &&
            auth()->user()->can('edit ticket') &&
            $user_can_responded_to_ticket;
    }

    public function see(User $user, Ticket $ticket)
    {
        $user_can_responded_to_ticket = false;

        if (!isset($ticket->responded_user_id)) {
            $user_can_responded_to_ticket = true;
        }
        if ($ticket->responded_user_id == auth()->id()) {
            $user_can_responded_to_ticket = true;
        }

        return
            auth()->user()->can('see ticket') &&
            $user_can_responded_to_ticket;
    }

    public function delete()
    {
        return auth()->user() && auth()->user()->can('delete ticket');
    }
    /* end admin policies */


    /* normal user policies */

    public function customer_manage(User $user)
    {
        return auth()->id() == $user->id;
    }

    public function customer_create(User $user)
    {
        return
            auth()->id() == $user->id;
    }

    public function customer_see(User $user, Ticket $ticket)
    {
        return
            auth()->id() === $user->id &&
            $user->asked_tickets()->find($ticket->id);
    }

    public function customer_update(User $user, Ticket $ticket)
    {
        $is_ticket_closed = $ticket->status == $ticket::STATUS['closed'];

        return
            auth()->id() === $user->id
            && $user->asked_tickets()->find($ticket->id) &&
            !$is_ticket_closed;
    }


    public function customer_delete(User $user, Ticket $ticket)
    {
        return false;
    }

}
