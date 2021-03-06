<?php

use App\Post;

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

//$users= \App\User::all();
//$users->each(function($user){ factory('App\Tag', 3)->create(['user_id'=>$user->id]); });


//
//$users->each(function($user){
//    factory('App\Post', 10)->create([
//        'user_id'=>$user->id,
//         'category_id'=>rand(1,20)
//    ]
//    );
//});
//$posts= \App\Post::all();
//$posts->each(function ($post){
//
//    $post->tags()->attach(array_unique([rand(1,30),rand(1,30),rand(1,30)]));
//});
$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'cover'=>$faker->imageUrl(),
        'slug'=>$faker->slug,
        'text'=>$faker->text(150),
    ];
});
