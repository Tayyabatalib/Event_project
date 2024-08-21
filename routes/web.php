<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\User_EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VenueController;
use App\Models\Venue;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// User Detail

Route::get('/user/index',[UserController::class,'index'])->name('users.index');

Route::get('/user/create',[UserController::class,'create'])->name('users.create');

Route::post('/user/store',[UserController::class,'store'])->name('users.store');

Route::get('/user/show/{id}',[UserController::class,'show'])->name('users.show');

Route::delete('/user/destroy/{id}',[UserController::class,'destroy'])->name('users.destroy');

// Event Detail

Route::get('/event/index',[EventController::class,'index'])->name('events.index');

Route::get('/event/create',[EventController::class,'create'])->name('events.create');

Route::post('/event/store',[EventController::class,'store'])->name('events.store');

Route::get('/event/show/{id}',[EventController::class,'show'])->name('events.show');

Route::delete('/event/destroy/{id}',[EventController::class,'destroy'])->name('events.destroy');


// Venue Detail

Route::get('/venue/index',[VenueController::class,'index'])->name('venues.index');

Route::get('/venue/create',[VenueController::class,'create'])->name('venues.create');

Route::post('/venue/store',[VenueController::class,'store'])->name('venues.store');

Route::get('/venue/show/{id}',[VenueController::class,'show'])->name('venues.show');

Route::delete('/venue/destroy/{id}',[VenueController::class,'destroy'])->name('venues.destroy');


// Tickets Detail

Route::get('/ticket/index',[TicketController::class,'index'])->name('tickets.index');

Route::get('/ticket/create',[TicketController::class,'create'])->name('tickets.create');

Route::post('/ticket/store',[TicketController::class,'store'])->name('tickets.store');

Route::get('/ticket/show/{id}',[TicketController::class,'show'])->name('tickets.show');

Route::delete('/ticket/delete/{id}',[TicketController::class,'delete'])->name('tickets.destroy');


// User Event Id's Route

Route::get('/user/event/index',[User_EventController::class,'index'])->name('user_event.index');


// Relationships

// User & Event relation(many-to -many)
Route::get('/user/event/list',[UserController::class,'user_event_list']);

// Event & User relation(mant-to-many)
Route::get('/event/user/list',[EventController::class,'user_event_list']);

// User & Venue relation(hasMany)
Route::get('/user/venue/list',[VenueController::class,'user_venue_list']);
