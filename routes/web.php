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

Route::feeds();

Route::get('/', 'HomeController@index');
Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/page/{page}', 'PostsController@page');
Route::get('/posts/{year}/{slug}', 'PostsController@show')->name('posts.show')->where('slug', '(.*)');