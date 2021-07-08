<?php

namespace App\Http\Controllers\Dashboard\Administratorship;

use App\Http\Controllers\Controller;
use App\Mail\TicketResponseMail;
use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::paginate(10);
        return view('dashboard.tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        $ticket->load('asked_user', 'responded_user', 'messages');

        $messages = $ticket->messages;

        return view('dashboard.tickets.show', compact('ticket', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validateWithBag('toastrErrorBag', [
            'message' => ['required'],
            'user_id' => ['required']
        ]);

        $for_user = $this->getMessageForUserEntityValue($request, $ticket);

        $ticket->messages()->create([
            'message' => $request->message,
            'for' => $for_user
        ]);
        if (!isset($ticket->responded_user_id)) {
            $ticket->responded_user_id = auth()->id();
        }
        $ticket->save();

        $this->sendEmailWhenAdminResponds($request, $ticket);

        return redirect()->route('dashboard.tickets.index')->with('toastr_success', 'پیام شما با موفقیت ثبت شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function toggleTicketStatus(Ticket $ticket)
    {
        // toggle status : maybe change in future for more options
        $ticket->status = 1 - $ticket->status;
        $ticket->save();

        return back()->with('toastr_success', 'تراکنش با موفقیت بسته شد');
    }

    public function sendEmailWhenAdminResponds(Request $request, Ticket $ticket): void
    {
        // send email just for asked user(costumer) when admin respond
        if ($request->user_id == $ticket->responded_user_id || auth()->user()->hasRole('admin') || auth()->user()->hasRole('super-admin')) {
            $user = User::whereId($ticket->asked_user_id)->first(['name', 'email']);

            $email_body = [
                'name' => $user->name,
                'ticket_title' => $ticket->title,
                'ticket_id' => $ticket->id
            ];

            Mail::to($user->email)->send(new TicketResponseMail($email_body));
        }
    }

    public function getMessageForUserEntityValue(Request $request, Ticket $ticket): int
    {
        $for_user = $request->user_id == $ticket->asked_user_id ? TicketMessage::FOR_USER['asked'] : TicketMessage::FOR_USER['responded'];
        return $for_user;
    }
}
