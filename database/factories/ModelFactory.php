<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Accomodations::class, function (Faker\Generator $faker) {
    $types = array('hotel', 'resort', 'guest-house');
    $k = array_rand($types);
    $v = $types[$k];

    return [
        'type' => $v,
        'user_id' => '1',

        'name' => $faker->company,
        'location' => $faker->country,
        'address' => $faker->streetAddress,
        'description' => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),

        'email' => $faker->unique()->safeEmail,
        'website' => $faker->freeEmailDomain,
        'phone' => $faker->e164PhoneNumber,

        'price' => $faker->numberBetween($min = 5, $max = 50) . '00',
        'rating' => $faker->numberBetween($min = 1, $max = 5),
        'check_in_time' => $faker->time($format = 'H:i', $max = 'now'),
        'check_out_time' => $faker->time($format = 'H:i', $max = 'now'),

        'cancellation' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'charge_childeren' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'pets' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'other_policies' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),

        'nights_minimum' => '1',
        'facilities' => '1, 2, 3, 4, 5, 6, 7',
    ];
});
