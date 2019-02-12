<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $table = 'products';

	protected $fillable = [
		'name', 'slug', 'price', 'discount', 'images', 'thumbnail', 'hot', 'warranty', 'brand', 'description', 'intro', 'catagory_id', 'distribution_id', 'status', 
	];

	public $timestamps = true;
	
	// Defining A Mutator
	public function setSlugAttribute($value){
		$this->attributes['slug'] = str_slug($value, "-");
	}

    // Defining An Accessor


    // Relationships
	public function distribute(){
		return $this->belongsTo(Distribute::class, 'distribution_id', 'id')->withDefault();
	}

	public function catagory(){
		return $this->belongsTo(Catagory::class, 'catagory_id', 'id')->withDefault();
	}

	public function orderDetail(){
		return $this->hasOne(OrderDetail::class, 'product_id', 'id');
	}

}
