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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\\'], function () {

    Route::get('/coffee','CoffeeController@index')->name('coffee');

    Route::post('/coffee','CoffeeController@store');

    Route::get('/coffee/create', 'CoffeeController@create');

    Route::get('/coffee/{id}', 'CoffeeController@show')->name('show');

    Route::delete('/coffee/{id}', 'CoffeeController@destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
