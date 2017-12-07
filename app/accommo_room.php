<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accommo_room extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany('App\Room_Image', 'room_id');
    }
    
    public function scopeMain_photo($query)
    {
        return $query->where('main', '1');
    }
}
