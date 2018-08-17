<?php

namespace App;

class Order extends Model
{
	/** AN ORDER BELONGS TO ONE STORE */
	public function stores() {
		return $this->belongsTo(Store::class, 'store_id');
	}
	/** AN ORDER BELONGS TO ONE USER */
	public function users() {
		return $this->belongsTo(User::class, 'user_id');
	}
	public function categories() {
		return $this->belongsTo(Category::class, 'category_id');
	}

	/** CONVERTS ITEMS IN THE ITEMS COLUMN TO AN ARRAY (IN DB) */
	protected $casts = [
		'items' => 'array'
	];
}
