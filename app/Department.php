<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function college()
    {
        return $this->belongsTo('App\College');
    }

    public function curriculums()
    {
        return $this->hasMany('App\Curriculum');
    }
}
