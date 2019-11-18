<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name'
    ];

    public $timestamps = false;

    public function curriculum_subjects()
    {
        return $this->hasMany('App\CurriculumSubject');
    }

    public function offerings()
    {
        return $this->hasMany('App\Offering');
    }
}
