<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);


        factory('App\User', 10 )->create();

        $users= \App\User::all();
        $users->each(function($user){ factory('App\Category', 3)->create(['user_id'=>$user->id]); });
        $users->each(function($user){ factory('App\Tag', 3)->create(['user_id'=>$user->id]); });


        $users->each(function($user){
            factory('App\Post', 10)->create([
                    'user_id'=>$user->id,
                    'category_id'=>rand(1,20)
                ]
            );
        });

        $posts= \App\Post::all();
        $posts->each(function ($post){

            $post->tags()->attach(array_unique([rand(1,20),rand(1,20),rand(1,20)]));
        });

    }
}
