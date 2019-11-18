<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;


$factory->define(Student::class, function (Faker $faker) {
    $genders = ['Male', 'Female'];
    
    return [
        'department_id' => $faker->numberBetween($min = 1, $max = App\Department::count()),
        'religion_id' => $faker->numberBetween($min = 1, $max = App\Religion::count()),
        'first_name' => $faker->firstName,
        'middle_name' => $faker->lastName,
        'last_name' => $faker->lastName,
        'gender' => $genders[array_rand($genders)],
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = '2000-01-30'),
    ];
});
