<?php

namespace App;

class Role extends Model
{
	/** A ROLE HAS MANY USERS */
    public function users() {
		return $this->hasMany(User::class);
	}
}
