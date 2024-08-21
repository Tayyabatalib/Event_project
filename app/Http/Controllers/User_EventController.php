<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class User_EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $users = User::all();
        $events = Event::all();
        return view('user_event.index',compact('events'));
    }

} 