<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $fillable = [
        'department_id',
        'name',  
    ];

    public $timestamps = false;

    public function curriculum_subjects()
    {
        return $this->hasMany('App\CurriculumSubject');
    }
}
