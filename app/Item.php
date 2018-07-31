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
    public function sizes() {
    	return $this->belongsToMany(Size::class);
    }
    public function products() {
        return $this->belongsToMany(Item::withPivot('categories')->where('category_id', '=', 5));
    }
}
