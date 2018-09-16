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
Route::get('/', 'StoryController@index');
Route::get('/create', 'StoryController@create');
Route::post('/stories', 'StoryController@store');
Route::get('/stories/{id}', 'StoryController@show');
Route::get('/select/{section}', 'StoryController@select');
Route::get('/logout', 'StoryController@destroy');

/* Route::get('/', function () {
    return view('master');
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
