<?php

namespace App;

use App\Role;
use App\User;

class Role extends Model
{
	/** A ROLE HAS MANY USERS */
    public function users() {
		return $this->hasMany(User::class);
	}
}
