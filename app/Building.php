<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function rooms()
    {
        return $this->hasMany('App\Room');
    }

    public function college()
    {
        return $this->hasOne('App\College');
    }
}
