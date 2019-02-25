<?php

use App\IqamaType;
use Faker\Generator as Faker;

$factory->define(IqamaType::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
