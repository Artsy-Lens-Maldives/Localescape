<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class photopanel extends Model
{
    use Sluggable;
    
    protected $guarded = [];
    
    /**
    * Return the sluggable configuration array for this model.
    *
    * @return array
    */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function photos()
    {
        return $this->hasMany('App\Photo_p_photo', 'photo_id');
    }
}
