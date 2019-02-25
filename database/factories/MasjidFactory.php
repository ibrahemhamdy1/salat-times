<?php

use App\User;
use App\Masjid;
use App\JuristicSetting;
use App\CalculationMethod;
use Faker\Generator as Faker;

$factory->define(Masjid::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'lat' => $faker->latitude(),
        'lng' => $faker->longitude(),
        'hajji_date_adjustment' => 0,
        'iqama_type' => 'Calculated',
        'calculation_method_id' => CalculationMethod::first()->id,
        'juristic_setting_id' => JuristicSetting::first()->id,
        'user_id' => User::first()->id,
    ];
});
