<?php

use App\Iqama;
use Faker\Generator as Faker;

$factory->define(Iqama::class, function (Faker $faker, $attributes) {
    return [
        'date' => $faker->dateTimeBetween('-10 years', 'now')->format("Y-m-d"),
        'fajr' => $faker->time,
        'duhr' => $faker->time,
        'asr' => $faker->time,
        'magrib' => $faker->time,
        'isha' => $faker->time,
    ];
});
