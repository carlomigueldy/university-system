<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'department_id',
        'religion_id',
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'date_of_birth',
    ];

    public $timestamps = false;
}
