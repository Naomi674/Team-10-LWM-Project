<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all()->sortBy("title");
        return view('ticket')->with('tickets', $tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket_create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'time' => 'required'
        ]);
        $ticket = new Ticket;
        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->time = $request->time;
        $ticket->author()->associate(auth()->user());
        $ticket->save();
        return redirect()->route('ticket.index')
            ->with('success','Ticket has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Ticket $ticket)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'time' => 'required'
        ]);
        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->time = $request->time;
        $ticket->save();
        return redirect()->route('ticket.index')
            ->with('success','Ticket has been updated successfully.');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'time' => 'required',
        ]);
        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->time = $request->time;
        $ticket->save();
        return redirect()->route('ticket.index')
            ->with('success','Ticket has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
//        $ticket = Ticket::find($ticket);
        $ticket -> delete();
//        return redirect('/tickets');



        return redirect()->route('ticket.index')
            ->with('success');
    }
}
