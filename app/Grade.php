<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'grade'
    ];

    public $timestamps = false;

    public function enrolled_subjects()
    {
        return $this->hasMany('App\EnrolledSubject');
    }
}
