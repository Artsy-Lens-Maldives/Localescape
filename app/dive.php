<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dive extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany('App\Dive_p_photo', 'dive_id');
    }
}
