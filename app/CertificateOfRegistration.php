<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CertificateOfRegistration extends Model
{
    protected $fillable = [
        'student_id',
        'scholarship_id',
        'curriculum_id',
        'semester',
    ];

    public $timestamps = false;
    
    public function student()
    {
        return $this->belongsTo('App\Student');
    }

    public function scholarship()
    {
        return $this->belongsTo('App\Scholarship');
    }

    public function curriculum()
    {
        return $this->belongsTo('App\Curriculum');
    }

    public function enrolled_subjects()
    {
        return $this->hasMany('App\EnrolledSubject');
    }
}
