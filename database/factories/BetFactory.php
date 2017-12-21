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

$factory->define(App\Bet::class, function (Faker $faker) {

    return [
        'user_id' => $faker->numberBetween($min = 2, $max = 49),
        'amount' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 100, $max = 10000),
        'type' => $faker->numberBetween($min = 1, $max = 2),
        'status' => $faker->numberBetween($min = 1, $max = 2),
        'coefficient' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 2, $max = 10)
    ];
});
