<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'event_id'
    ];

    // Venue and Event Relation Many to One
    public function events(){
        return $this->hasMany(Event::class,'id','event_id');
    }
}
