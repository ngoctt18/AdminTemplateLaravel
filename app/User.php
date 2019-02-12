<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'phone', 'images', 'address', 'status', 'email', 'password', 'verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    // Defining A Mutator
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    // Defining An Accessor


    // Relationships
    public function orders(){
        return $this->hasMany(Order::class, 'user_id', 'id');
    }

}
