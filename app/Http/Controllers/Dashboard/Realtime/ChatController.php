<?php

namespace App\Http\Controllers\Dashboard\Realtime;

use App\Events\MessageSentEvent;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Models\TicketMessage;
use Illuminate\Http\Request;

class ChatController extends Controller
{


    public function chats(Request $request)
    {
        $ticket = Ticket::find($request->ticket_id);

        if (!isset($ticket->responded_user_id) && auth()->user()->hasAnyRole('admin|super-admin')) {
            $ticket->responded_user_id = auth()->id();
            $ticket->save();
        }

        if (isset($ticket->responded_user_id) && auth()->user()->hasAnyRole('admin|super-admin')) {
            if ($ticket->responded_user_id != auth()->id()) {
                abort(403);
            }
        }

        return view('realtime.chat', compact('ticket'));
    }

    public function getTicketMessages($id)
    {
        $ticket = Ticket::find($id);
        $messages = $ticket->messages;
        $messages->load('user');

        return response()->json([
            'messages' => $messages,
            'ticket' => $ticket,
            'user' => auth()->user()
        ]);
    }

    public function sendTicketMessage(Request $request)
    {
        $ticket = Ticket::find($request->ticket_id);
        $message = $ticket->messages()->create([
            'message' => $request->message,
            'for' => auth()->id() == $ticket->asked_user_id ? TicketMessage::FOR_USER['asked'] : TicketMessage::FOR_USER['responded'],
            'user_id' => auth()->id(),
        ]);

        $message->load('user');
        broadcast(new MessageSentEvent($message, $ticket));
        return ['status' => 'success', 'message' => $message];
    }

}
