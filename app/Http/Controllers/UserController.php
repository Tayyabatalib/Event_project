<?php

namespace App\Http\Controllers;


use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use GuzzleHttp\Promise\Create;

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

        User::create($validatedData);

        // $user = new User();
        // $user->name = $validatedData['user_name'];
        
        // $user->email = $validatedData['email'];
       
        // $user->save();

        return redirect()->route('users.index')
        ->with('success','Your are Registered Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::with('events')
                      ->with('venues')
                      ->with('tickets')
                      ->find($id);
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

}
