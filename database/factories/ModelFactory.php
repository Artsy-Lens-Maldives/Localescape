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
        'user_id' => '1',

        'name' => $faker->company,
        'type' => $v,
        'description' => $faker->paragraph($nbSentences = 6, $variableNbSentences = true),
        'offer' => rand(0,1),
        'offer_percentage' => rand(30,50),
        'offer_notes' => 'Off Today!',
        'receive_reviews' => rand(0,1),
        'minimum_stay' => '1',
        'price' => rand(100,1000),
        
        'address' => $faker->streetAddress,
        'email' => $faker->unique()->safeEmail,
        'phone' => $faker->e164PhoneNumber,
        'mobile_phone' => $faker->e164PhoneNumber,
        'facebook_page' => 'facebook.com',
        'twitter' => 'twitter.com',
        'youtube' => 'youtube.com',
        'website' => $faker->freeEmailDomain,
        'latitude' => $faker->latitude($min = -90, $max = 90),
        'longitude' => $faker->longitude($min = -180, $max = 180),
        
        'facilities' => '1, 2, 3, 4, 5, 6, 7',

        'cancellation' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'charge_childeren' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'pets' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
        'other_policies' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),        
        
        'early_check_in' => rand(0,1),
        'check_in_from' => $faker->time($format = 'H:i', $max = 'now'),
        'check_in_to' => $faker->time($format = 'H:i', $max = 'now'),
        
        'late_check_out' => rand(0,1),
        'check_out_from' => $faker->time($format = 'H:i', $max = 'now'),
        'check_out_to' => $faker->time($format = 'H:i', $max = 'now'),
            
        'top_acco' => rand(0,1),
    ];
});
