<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bet extends Model
{
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function eventsBetsFromBet() {
        return $this->hasMany('App\EventsBet');
    }
}
