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

$factory->define(App\Event::class, function (Faker $faker) {

    return [
        'event_name' => $faker->text($maxNbChars = 20),
        'coefficient' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 2, $max = 10),
        'status' => $faker->numberBetween($min = 1, $max = 2),
        'date_create' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'category_id' => $faker->numberBetween($min = 1, $max = 28),
        'tournament_name' => $faker->randomElement(array('Реал-Барселона', 'Arsenal-MU', 'MC-Chelsea', 'PSJ-Basel', 'Anji-CSKA'))
    ];
});