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
    public function vendors() {
    	return $this->belongsToMany(Vendor::class);
    }
}
