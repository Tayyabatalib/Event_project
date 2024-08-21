<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_event extends Model
{
    use HasFactory;


    protected $fillable = [
        'user_id',
        'event_id',
    ];

    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event()
    {
        return $this->hasMany(Event::class,'user_id');
    }
}
