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

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'        => $faker->word,
        'description' => $faker->text($maxNbChars = 200),
        'img'         => $faker->imageUrl($width = 640, $height = 480),
        'category_id' => mt_rand(1, 10),
    ];
});
