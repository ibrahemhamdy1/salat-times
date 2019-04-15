<?php

use App\Iqama;
use Faker\Generator as Faker;

$factory->define(Iqama::class, function (Faker $faker, $attributes) {
    return [
        'date' => $faker->date,
        'fajr' => $faker->time,
        'duhr' => $faker->time,
        'asr' => $faker->time,
        'magrib' => $faker->time,
        'isha' => $faker->time,
    ];
});
