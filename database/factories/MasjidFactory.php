<?php

use App\Masjid;
use Faker\Generator as Faker;

$factory->define(Masjid::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'phone_ext' => $faker->phoneNumber,
        'address_1' => $faker->address,
        'address_2' => $faker->address,
        'city' => $faker->city,
        'state' => $faker->state,
        'zip_code' => $faker->postcode,
        'lat' => $faker->latitude(),
        'lng' => $faker->longitude(),
        'hajji_date_adjustment' => 0,
    ];
});
