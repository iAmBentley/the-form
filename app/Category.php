<?php

namespace App;

class Category extends Model
{	
	public function items() {
		return $this->belongsToMany(Item::class);
	}
	public function stores() {
		return $this->belongsToMany(Store::class);
	}
	public function sizes() {
		return $this->hasMany(Size::class);
	}
	public function orders() {
		return $this->belongsTo(Order::class);
	}
}
