<?php

namespace App\Http\Controllers\Dashboard\CustomerManagement;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTicketRequest;
use App\Mail\TicketResponseMail;
use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $tickets = Auth::user()->asked_tickets()->paginate(10);

        return view('dashboard.customers.tickets.index', compact('tickets'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $ticket_categories = Ticket::getCategoryTextAndCode();
        return view('dashboard.customers.tickets.create', compact('ticket_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTicketRequest $request)
    {
        $ticket = Ticket::create([
           'title' => $request->title,
            'body' => $request->body,
            'category' => $request->category,
            'asked_user_id' => Auth::id(),
        ]);

        if (!$ticket) {
            return back()->with('toastr_error', 'مشکلی در انجام درخواست شما پیش آمد');
        }

        return redirect()->route('dashboard.customers.tickets.index')->with('toastr_success', 'تیکت شما با موفقیت ثبت شد و از طریق ایمیل اطلاع رسانی خواهد شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('dashboard.customers.tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validateWithBag('toastrErrorBag', [
            'message' => ['required'],
            'user_id' => ['required']
        ]);

        $for_user = $request->user_id == $ticket->asked_user_id ? TicketMessage::FOR_USER['asked'] : TicketMessage::FOR_USER['responded'];

        $ticket->messages()->create([
            'message' => $request->message,
            'for' => $for_user
        ]);
        $ticket->save();

        return redirect()->route('dashboard.customers.tickets.index')->with('toastr_success', 'پیام شما با موفقیت ثبت شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
