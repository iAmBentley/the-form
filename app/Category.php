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
    
}
