<?php

namespace App;

class Item extends Model
{
    public function categories() {
    	return $this->belongsToMany(Category::class);
    } 
    public function stores() {
    	return $this->belongsToMany(Store::class);
    }
    public function store() {
        return $this->belongsToMany('App\Store');
    }
    public function vendors() {
    	return $this->belongsTo(Vendor::class);
    }
    public function sizes() {
    	return $this->belongsToMany(Size::class);
    }
}
