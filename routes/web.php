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


// Cast routes
Route::get('/casts', 'CastController@index');
Route::get('/cast/new', 'CastController@new');
Route::post('/cast', 'CastController@store');
Route::post('/cast/{cast}', 'CastController@edit');
Route::delete('/cast/{cast}', 'CastController@destroy');

Route::get('json-api', 'ApiController@index');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
