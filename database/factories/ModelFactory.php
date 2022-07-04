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

$factory->define(App\knjiga::class, function (Faker\Generator $faker) {
    return [
        'naslov' => $faker->sentence,
        'autor' => $faker->name,
        'godina' => $faker->year,
        'izdavac' => $faker->word,
        'ISBN' => $faker->numberBetween(1000000000,9999999999),
        'kolicina' => $faker->numberBetween(1,100)
    ];
});
