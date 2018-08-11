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

//Posts
Route::get  ('/', 'PostsController@index')->name('home');
Route::get  ('/posts', 'PostsController@index');
Route::get  ('/posts/create', 'PostsController@create');
Route::post ('/posts', 'PostsController@store');
Route::get  ('/posts/{post}', 'PostsController@show');
Route::get 	('/posts/tag/{tag}', 'TagsController@index');

//Comments
Route::post ('/posts/{post}/comments', 'CommentsController@store');

//Tasks
Route::get  ('/tasks/{task}', 'TasksController@show');
Route::get  ('/tasks', 'TasksController@index');

//Authentication
Route::get  ('/register', 'RegistrationController@create');
Route::post ('/register', 'RegistrationController@store');

Route::get  ('/login', 'SessionsController@create')->name('login');
Route::post ('/login', 'SessionsController@store');
Route::get 	('/logout', 'SessionsController@destroy');
