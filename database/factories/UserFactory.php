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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'patronymic' => $faker->lastName,
        'sex' => $faker->randomElement(array('man', 'woman')),
        'birthday' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'country' => $faker->country,
        'city' => $faker->city,
        'telephone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'balance' => $faker->numberBetween($min = 299, $max = 33000),
        'remember_token' => str_random(10),
    ];
});
