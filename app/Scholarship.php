<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'name',
    ];

    public $timestamps = false;

    public function certificate_of_registrations()
    {
        return $this->hasMany('App\CertificateOfRegistration');
    }
}
