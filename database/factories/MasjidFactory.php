<?php

use App\Masjid;
use App\IqamaType;
use Faker\Generator as Faker;

$factory->define(Masjid::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'lat' => $faker->latitude(),
        'lng' => $faker->longitude(),
        'hajji_date_adjustment' => 0,
        'iqama_type' => IqamaType::first()->id,
    ];
});
