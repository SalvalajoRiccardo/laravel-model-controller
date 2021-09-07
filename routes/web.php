<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@home')->name('homepage');

Route::get('/comics-page', 'ComixController@comics')->name('comics-route');


Route::get('/detail/{id}', 'ComixController@detail')->name('dettaglio-fumetto');
