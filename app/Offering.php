<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
    protected $fillable = [
        'room_id',
        'faculty_id',
        'subject_id',
    ];

    public $timestamps = false;

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function faculty()
    {
        return $this->belongsTo('App\Faculty');
    }

    public function subject()
    {
        return $this->belongsTo('App\Subject');
    }
}
