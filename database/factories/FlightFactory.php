<?php

use App\Flight;
use Faker\Generator as Faker;


$factory->define(Flight::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'airline' => 'FirstAir',
        'created_at' => now(),
        
    ];
});