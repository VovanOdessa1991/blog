<?php

use App\Tag;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|----------------------Tag----------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'slug'=>$faker->slug,
    ];
});
