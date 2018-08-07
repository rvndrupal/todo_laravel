<?php

use Faker\Generator as Faker;

$factory->define(App\Slider::class, function (Faker $faker) {
    return [
        'titulo'=> $faker->sentence,
        'subtitulo'=> $faker->sentence,
        'file' => $faker->imageUrl($width=1200, $height=400),
    ];
});
