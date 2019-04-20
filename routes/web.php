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

Route::get('/', 'WelcomeControler@index' );
Route::get('/signIn', 'SignController@signIn' );
Route::get('/signUp', 'SignController@signUp' );


Route::get('/postCategory1', 'PostController@postCategory1');
Route::get('/postCategory2', 'PostController@postCategory2');
Route::get('/postCategory3', 'PostController@postCategory3');


Route::get('/posts/{id}', 'PostControler@view');
