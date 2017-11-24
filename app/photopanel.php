<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photopanel extends Model
{
    protected $guarded = [];

    public function photos()
    {
        return $this->hasMany('App\Photo_p_photo', 'photo_id');
    }
}
