<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CurriculumSubject;
use Faker\Generator as Faker;

$factory->define(CurriculumSubject::class, function (Faker $faker) {
    return [
        'curriculum_id' => $faker->numberBetween($min = 1, $max = App\Curriculum::count()),
        'subject_id' => $faker->numberBetween($min = 1, $max = App\Subject::count()),
    ];
});
