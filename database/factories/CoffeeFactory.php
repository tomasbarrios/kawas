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
Faker\Factory::create('es_CL');

$factory->define(App\Models\CoffeeOrigin::class, function (Faker\Generator $faker) {
 return [
        'title' => $faker->name,
        'body' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'post_date' => $faker->date,
        'post_type' => $faker->name,
        'country' => $faker->name,
        'post_visits' => rand(10,20)
        // 'email' => $faker->safeEmail,
        // 'password' => bcrypt(str_random(10)),
        // 'remember_token' => str_random(10),
    ];
});