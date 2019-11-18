<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CurriculumSubject extends Model
{
    protected $fillable = [
        'curriculum_id',
        'subject_id',
    ];

    public $timestamps = false;

    public $incrementing = false;

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }

    public function curriculum()
    {
        return $this->belongsTo('App\Curriculum');
    }
}
