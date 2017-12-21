<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\EventsBet::class, function (Faker $faker) {

    return [
        'event_id' => $faker->numberBetween($min = 2, $max = 50),
        'bet_id' => $faker->numberBetween($min = 2, $max = 50),
    ];
});