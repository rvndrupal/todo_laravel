<?php

use Faker\Generator as Faker;

$factory->define(App\About::class, function (Faker $faker) {
    return [
        'titulo'=> $faker->sentence,
        'subtitulo'=> $faker->sentence,        
        'body' => $faker->sentence,
        'l1' => $faker->sentence,
        'l2' => $faker->sentence,
        'l3' => $faker->sentence,
        'l4' => $faker->sentence,
        'l5' => $faker->sentence,
        'file' => $faker->imageUrl($width=1200, $height=400),
    ];
});
