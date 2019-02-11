<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Writer extends Authenticatable
{
	use Notifiable;

	protected $guard = 'writer';

	protected $fillable = [
		'name', 'username', 'phone', 'images', 'address', 'status', 'email', 'password', 'verified',
	];

	protected $hidden = [
		'password', 'remember_token',
	];
	
	public function setPasswordAttribute($value){
		$this->attributes['password'] = bcrypt($value);
	}
}
