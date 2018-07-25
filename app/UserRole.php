<?php

namespace App;

class UserRole extends Model
{
    public function users() {
		return $this->hasMany(User::class);
	}
}
