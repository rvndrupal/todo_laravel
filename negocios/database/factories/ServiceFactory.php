<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'icon'=> $faker->sentence,
        'titulo'=> $faker->sentence,        
        'body' => $faker->sentence,
        
    ];
});
