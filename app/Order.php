<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
