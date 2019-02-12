<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatagoriesType extends Model
{
	protected $table = 'catagories_types';

	protected $fillable = [
		'name', 'slug', 'status', 
	];

	public $timestamps = true;

	// Defining A Mutator
	public function setSlugAttribute($value){
		$this->attributes['slug'] = str_slug($value, "-");
	}

    // Defining An Accessor
    

    // Relationships
	public function catagories(){
		return $this->hasMany(Catagory::class, 'catagory_type_id', 'id');
	}
}
