<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Accomodations extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }
}
