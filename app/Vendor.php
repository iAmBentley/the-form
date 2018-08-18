<?php

namespace App;

class Vendor extends Model
{
    public function items() {
    	return $this->hasMany(Item::class);
    }
}
