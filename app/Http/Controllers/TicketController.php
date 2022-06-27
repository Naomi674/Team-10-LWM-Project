<?php

namespace App\Http\Controllers;

use App\Http\Responses\PriorityPublicContract;
use App\Http\Responses\StatusPublicContract;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Enumerable;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use phpDocumentor\Reflection\Types\Nullable;
use Ramsey\Collection\Collection;
use function GuzzleHttp\Promise\all;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $catalogTickets = DB::table('catalog_tickets')->get();
        $tickets = Ticket::all()->sortBy("priority",0,(bool)$request->get('desc'));
        $user = auth()->user();
        if(!$user->role_id==1) {
            $tickets = $user->tickets()->get()->sortBy("priority",0,(bool)$request->get('desc'));
        }

        return view('ticket', compact('catalogTickets'))
            ->with('tickets', $tickets)
            ->with('priorities_contract', PriorityPublicContract::PUBLIC_FIELDS)
            ->with('available_priorities',Ticket::AVAILABLE_PRIORITIES)
            ->with('tickets', $tickets)
            ->with('statuses_contract', StatusPublicContract::PUBLIC_FIELD)
            ->with('available_statuses',Ticket::AVAILABLE_STATUSES);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ticket_create')
            ->with('priorities_contract', PriorityPublicContract::PUBLIC_FIELDS)
            ->with('available_priorities',Ticket::AVAILABLE_PRIORITIES)
            ->with('statuses_contract', StatusPublicContract::PUBLIC_FIELD)
            ->with('available_statuses',Ticket::AVAILABLE_STATUSES);
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
            'title' => 'required|string|max:256',
            'description' => 'required|string|max:1024',
            'time' => 'required|integer|max:23',
            'location' => 'required|string|max:56',
            'priority' => ['required', 'integer', Rule::in(Ticket::AVAILABLE_PRIORITIES)],
        ]);
        $ticket = new Ticket;
        $ticket->title = $request->title;
        $ticket->description = $request->description;
        $ticket->time = $request->time;
        $ticket->location = $request->location;
        $ticket->priority = $request->priority;
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
            'status' => 'required'
        ]);
        $ticket = Ticket::find($ticket)->first();
        $ticket->status = $request->status;
        $ticket->save();

        return redirect()->route('ticket.index');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
    }

    public function destroy(Ticket $ticket)
    {
        $user = auth()->user();
        if(Ticket::where('author_id', $user->id)->get()->contains($ticket->id)){
            $ticket->delete();
        }


        return redirect()->route('ticket.index');
    }

    /**
     * Display a list of the author.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTickets(Request $request)
    {
        $user = auth()->user();
        if(!$user->role_id==1) {

            return redirect()->route('ticket.index');
        }
        $tickets = $user->assignedTickets()->get()->sortBy("priority",0,(bool)$request->get('desc'));

        return view('ticket_my_tickets')
            ->with('tickets', $tickets)
            ->with('priorities_contract', PriorityPublicContract::PUBLIC_FIELDS)
            ->with('available_priorities',Ticket::AVAILABLE_PRIORITIES)
            ->with('tickets', $tickets)
            ->with('statuses_contract', StatusPublicContract::PUBLIC_FIELD)
            ->with('available_statuses',Ticket::AVAILABLE_STATUSES);

    }

    /**
     * Assign a ticket to a user.
     *
     * @return \Illuminate\Http\Response
     */
    public function take(Ticket $ticket)
    {

        $user = auth()->user();
        if(!$user->role_id==1) {

            return redirect()->route('ticket.index');
        }
        $ticket = Ticket::find($ticket)->first();
        $ticket->assignee()->associate($user);
        $ticket->save();



        return redirect()->route('ticket.myTickets');
    }

}
