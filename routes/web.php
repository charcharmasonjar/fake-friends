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

use App\Http\Controllers\CastController;

Route::resource('casts', 'CastController');
Route::resource('user.casts', 'CastController');

Route::get('/', function () {
    return view('welcome');
});
