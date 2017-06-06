<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Artesaos\Defender\Traits\HasDefender;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable, HasDefender;
    
    const STATUS_ACTIVE = 1;
    const STATUS_BLOCKED = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password, status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function profile() {
        return $this->hasOne('App\Profile');
    }

}
