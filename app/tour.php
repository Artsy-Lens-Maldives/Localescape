<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany('App\Tours_photo', 'tour_id');
    }
}
