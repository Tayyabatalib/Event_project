<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Event;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
         'user_name',
         'age',
         'email',
         'phone_no',
         'address',
    ];

    /**
     * The event that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\
     */
    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

}
