<?php

namespace App\Http\Controllers;

use App\Models\Event;
use GuzzleHttp\Promise\Create;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
                 'user_name' => 'nullable|string',
                 'age' => 'nullable',
                 'email' => 'nullable|email',
                 'phone_no' => 'nullable',
                 'address' => 'nullable|string',
        ]);
        
        //dd($validatedData);

        $user = new User();
        $user->user_name = $validatedData['user_name'];
        $user->age = $validatedData['age'];
        $user->email = $validatedData['email'];
        $user->phone_no = $validatedData['phone_no'];
        $user->address = $validatedData['address'];
        $user->save();

        return redirect()->route('users.index')
        ->with('success','Your are Registered Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return view('user.show',compact('user'));
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
        $user = User::find($id);
        $user->delete();

        return redirect()->route('users.index')
        ->with('success','Your are UnRegistered Successfully');
    }



    // Relationships

    
    public function user_event_list(){
        $users = User::with('events')->get();
        dd($users);
    }

}
