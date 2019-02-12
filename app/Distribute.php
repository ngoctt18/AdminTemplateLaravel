<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distribute extends Model
{
	protected $table = 'distributions';

	protected $fillable = [
		'name', 'slug', 'email', 'phone', 'address', 'description', 'status', 
	];

	public $timestamps = true;

	// Defining A Mutator
	public function setSlugAttribute($value){
		$this->attributes['slug'] = str_slug($value, "-");
	}

    // Defining An Accessor


    // Relationships
	public function products(){
		return $this->hasMany(Product::class, 'distribution_id', 'id');
	}
}
