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

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Route::get('travels', 'TravelController@index')->name('travels');
Route::get('travels/{travel}', 'TravelController@show')->name('travel');

Route::get('blogs', 'BlogController@index')->name('blogs');
Route::get('blogs/{blog}', 'BlogController@show')->name('blog');

Route::get('/about', 'TravelController@about')->name('aboutus');