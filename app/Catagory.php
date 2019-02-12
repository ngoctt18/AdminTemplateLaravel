<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catagory extends Model
{
	protected $table = 'catagories';

	protected $fillable = [
		'name', 'slug', 'description', 'catagory_type_id', 'status', 
	];

	public $timestamps = true;
	
	// Defining A Mutator
	public function setSlugAttribute($value){
		$this->attributes['slug'] = str_slug($value, "-");
	}

    // Defining An Accessor


    // Relationships
	public function catagoryType(){
		return $this->belongsTo(CatagoriesType::class, 'catagory_type_id', 'id')->withDefault();
	}

	public function product(){
		return $this->hasMany(Product::class, 'catagory_id', 'id');
	}

}
