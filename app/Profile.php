<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

    protected $fillable = ['phone', 'address', 'zip_code', 'city', 'state', 'image', 'user_id'];
//
//    public function user() {
//        return $this->belongsTo('App\User');
//    }
}
