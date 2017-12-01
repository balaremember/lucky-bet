<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function eventsBetsFromEvent() {
        return $this->hasMany('App\EventsBet');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
