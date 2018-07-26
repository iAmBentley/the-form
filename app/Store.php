<?php

namespace App;

class Store extends Model
{
    public function categories() {
    	return $this->belongsToMany(Category::class);
    }
}
