<?php

namespace App;

class Store extends Model
{
	/** A STORE BELONGS TO MANY CATEGORIES */
    public function categories() {
    	return $this->belongsToMany(Category::class);
    }
    /** A STORE BELONGS TO MANY ITEMS */
    public function items() {
    	return $this->belongsToMany(Item::class);
    }
    /** A STORE HAS MANY ORDERS */
    public function orders() {
    	return $this->hasMany(Order::class);
    }
    public function formItems($selectedStore) {
        return $this->belongsToMany(Items::class)->wherePivot('store_id', $selectedStore)->get();
    }
}
