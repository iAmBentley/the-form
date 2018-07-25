<?php

namespace App;

use App\User;
use App\UserRole;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /** The attributes that are mass assignable. */
    protected $fillable = [
        'name', 'email', 'password', 'user_role_id', 'is_active',
    ];

    /** The attributes that should be hidden for arrays. */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /** USERS BELONG TO ONE USER ROLE */
    public function userRoles() {
        return $this->belongsTo(UserRole::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
