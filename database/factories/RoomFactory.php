<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'building_id' => $faker->numberBetween($min = 1, $max = App\Building::count()),
    ];
});
