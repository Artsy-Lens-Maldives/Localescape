<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;

class Accomodations extends Model
{
    use SoftDeletes;
    use Sluggable;
    use Searchable;
    
    protected $guarded = [];
    
    public $asYouType = false;
    
    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        return [
            'id' => $this->id, // required
            'title' => $this->title,
            'type' => $this->type,
            'description' => $this->description,
            'address' => $this->address,
        ];
    }

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

    public function mainPhoto()
    {
        return $this->photos()->where('main', '1');
    }

    public function scopeMain_photo($query)
    {
        return $query->where('main', '1');
    }

    public function rooms()
    {
        return $this->hasMany('App\accommo_room', 'accommo_id');
    }

    public function bookings()
    {
        return $this->hasMany('App\booking', 'accommo_id');
    }

    public function extranet()
    {
        return $this->belongsTo('App\Extranet', 'user_id');
    }
}
