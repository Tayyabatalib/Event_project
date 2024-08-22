<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('ticket.index',compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('ticket.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData  = $request->validate([
            'type' => 'required|string',
            'price' => 'required|numeric',
            'event_id' => 'required',
        ]);

        Ticket::create($validatedData);

        return redirect()->route('tickets.index')
                         ->with('success','Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket = Ticket::with('events')->find($id);
        return view('ticket.show',compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();

        return redirect()->route('tickets.index')
                         ->with('success','Ticket Deleted Successfully');
    }


    // For practice(It's not a part of code)

    // public function hasMany(){
    //     $tickets = Ticket::with('events')->find(3);
    //     return $tickets->events->name ;
    // }
}
