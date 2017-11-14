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
                'source' => 'name'
            ]
        ];
    }


    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}
