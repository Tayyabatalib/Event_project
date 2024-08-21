<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Venue;
use Illuminate\Http\Request;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::all();
        return view('venue.index',compact('venues'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::all();
        return view('venue.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Venue::create([
            'name' => $request->name,
            'address' => $request->address,
            'event_id' => $request->event_id,
        ]);

        return redirect()->route('venues.index')
                         ->with('success','Venue Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $venue = Venue::find($id);
        return view('venue.show',compact('venue'));
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
        $venue = Venue::find($id);
        $venue->delete();

        return redirect()->route('venues.index')
                         ->with('success','Venue deleted Successfully');
    }



    // Event and Venue Relation Many to One
    function user_venue_list(){
        $user_venue = Venue::with('events')->get();
        dd($user_venue);
    }
}
