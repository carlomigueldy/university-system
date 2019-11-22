<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EnrolledSubject extends Model
{
    protected $fillable = [
        'certificate_of_registration_id',
        'grade_id',
        'subject_id',
    ];

    public $timestamps = false;

    public function certificate_of_registration()
    {
        return $this->belongsTo('App\CertificateOfRegistration');
    }

    public function grade()
    {
        return $this->belongsTo('App\CertificateOfRegistration');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
