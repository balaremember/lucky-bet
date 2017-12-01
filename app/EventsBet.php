<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventsBet extends Model
{
    protected $table = 'events_in_specific_bet';

    public function bet() {
        return $this->belongsTo('App\Bet');
    }

    public function event() {
        return $this->belongsTo('App\Event');
    }
}
