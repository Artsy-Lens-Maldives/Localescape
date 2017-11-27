<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class dive extends Model
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
        return $this->hasMany('App\Dive_p_photo', 'dive_id');
    }
}
