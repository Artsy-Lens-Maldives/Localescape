<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;

class Accomodations extends Model
{
    use SoftDeletes;
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


    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function photos()
    {
        return $this->hasMany('App\accommo_photo', 'accommo_id');
    }

    public function scopeMain_photo($query)
    {
        return $query->where('main', '1');
    }
}
