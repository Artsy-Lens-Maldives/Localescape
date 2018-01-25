<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inquery extends Model
{
    protected $guarded = [];
    
    public function accommodation()
    {
        return $this->belongsTo('App\Accomodations', 'acco_id');
    }

    public function room()
    {
        return $this->belongsTo('App\accommo_room', 'room_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
