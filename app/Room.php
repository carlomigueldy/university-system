<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'building_id',
    ];

    public $timestamps = false;

    public function offerings()
    {
        return $this->hasMany('App\Offering');
    }

    public function building()
    {
        return $this->belongsTo('App\Building');
    }
}
