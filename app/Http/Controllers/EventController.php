<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\User_event;
use App\Models\Venue;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        return view('event.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        //dd($users);
        return view('event.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //dd($request);
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'start_time' => 'required',
            'end_time' => 'required',
            'user_id' => 'required',
        ]);

        $event = Event::create($validatedData);


         $user_event = new User_event();
         $user_event->user_id = $validatedData['user_id'];
         $user_event->event_id = $event->id;
         $user_event->save();

        return redirect()->route('events.index')
        ->with('success','Event Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $event = Event::with('users')->find($id);
        return view('event.show',compact('event'));
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
        $event = Event::find($id);
        $event->delete();

        return redirect()->route('events.index')
        ->with('success','Event Deleted Successfully');
    }


    //Relationships

    // Event and User Relation Many To Many
    function user_event_list(){
        $user_event = Event::with('user')->get();
        return $user_event;
    }


    // // Event and Venue Relation Many to One
    // function user_venue_list(){
    //     $user_venue = Event::with('venue')->get();
    //     dd($user_venue);
    // }

    function event_venue_list(){
        $event_venues = Event::with('venues')->get();

        foreach($event_venues as $venue){
            dd($venue->venues->name);
        }
    }

}
