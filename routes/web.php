<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/postTest', 'WelcomeControler@index' );
Route::get('/signIn', 'SignController@signIn' );
Route::get('/signUp', 'SignController@signUp' );


Route::get('/postCategory1', 'PostController@postCategory1');
Route::get('/postCategory2', 'PostController@postCategory2');
Route::get('/postCategory3', 'PostController@postCategory3');


Route::get('/posts/{id}', 'PostControler@view');




Route::get('/', function(){
//    $posts=\App\Post::paginate(15);
//    $posts = App\Post::withCount('likes')->get();
//    $posts = App\Post::withCount('likes')->get()->paginate(15);
    $posts = App\Post::withCount('likes', 'comments')->paginate(15);

    return view('homeBlog', ['posts'=> $posts ]);

})->name('posts.all' );

Route::get('/postTest/{id}', function($id){
    $post=\App\Post::find($id);
    return view('posts.post', ['post'=> $post]);

})->name('post.find' );


Route::get('/user/{id}', function($id){
    $user=\App\User::find($id);
    $posts=$user->posts()->paginate(5);

    return view('posts.by-user',[
        'user'=>$user,
        'posts'=>$posts
    ]);

})->name('user.find' );

Route::get('/category/{slug}', function($slug){
    $category=\App\Category::where('slug', '=', $slug)->first();
    $posts=$category->posts()->paginate(5);

    return view('posts.by-category',[
        'category'=>$category,
        'posts'=>$posts
    ]);
})->name('category.find' );

Route::get('/tag/{slug}', function($slug){
    $tag=\App\Tag::where('slug', '=', $slug)->first();
    $posts=$tag->posts()->paginate(5);

    return view('posts.by-tag',[
        'tag'=>$tag,
        'posts'=>$posts
    ]);
})->name('tag.find' );
