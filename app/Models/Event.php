<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_time',
        'end_time',
        'user_id',
    ];


    // Event and User Relation Many To Many
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_events');
    }
    
    // Event and Venue Relation Many to One
    public function venues(){
        return $this->belongsTo(Venue::class,'id','event_id');
    }

    


    // /**
    //  * Get the venue that owns the Event
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function venue()
    // {
    //     return $this->belongsTo(Venue::class, 'venue_id');
    // }

    // /**
    //  * Get all of the ticket for the Event
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\HasMany
    //  */
    // public function ticket()
    // {
    //     return $this->hasMany(Ticket::class, 'ticket_id');
    // }

}
