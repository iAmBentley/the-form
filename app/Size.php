<?php

namespace App;

class Size extends Model
{
    public function items() {
    	return $this->belongsToMany(Item::class);
    }
    public function categories() {
    	return $this->belongsTo(Category::class, 'category_id');
    }
}
