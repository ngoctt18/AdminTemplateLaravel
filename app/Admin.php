<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
	use Notifiable;

	protected $guard = 'admin';

	protected $fillable = [
		'name', 'username', 'phone', 'images', 'address', 'status', 'email', 'password',
	];

	protected $hidden = [
		'password', 'remember_token',
	];

	// Defining A Mutator
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    // Defining An Accessor


    // Relationships
}