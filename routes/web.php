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

Route::get('/', 'DocController@index');


Route::get('/user', 'UsersController@index');


Route::get('/kao', function () {
    return "kao";
});
Route::get('/v1/zoos', function () {
    return "v1/zoos";
});
Route::get('/v1/zoos2', function () {
    return "zoos2";
});


Route::get('/doc', 'DocController@index');
Route::get('/doc/laravel', 'DocController@laravel');
Route::get('/doc/vue', 'DocController@vue');
Route::get('/doc/sass', 'DocController@sass');
Route::get('/doc/grunt', 'DocController@grunt');


Route::get('/laraveldemo/l_view', 'LaravelDemoController@l_view');
Route::get('/laraveldemo/l_vue', 'LaravelDemoController@l_vue');
Route::get('/laraveldemo/l_cache', 'LaravelDemoController@l_cache');
Route::get('/laraveldemo/l_db', 'LaravelDemoController@l_db');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('apples', 'AppleController');

Route::resource('notes', 'noteController');