<?php

use Faker\Generator as Faker;

$factory->define(App\Cliente::class, function (Faker $faker) {
    return [
        'name'=> $faker->sentence,
        'ap'=> $faker->sentence,
        'file' => $faker->imageUrl($width=1200, $height=400),
    ];
});
