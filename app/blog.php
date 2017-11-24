<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class blog extends Model
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
                'source' => 'title'
            ]
        ];
    }

    public function photos()
    {
        return $this->hasMany('App\Blog_photo', 'blog_id');
    }
}
