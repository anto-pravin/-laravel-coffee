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

    Route::get('/coffee','CoffeeController@index')->name('coffees.index')->middleware('auth');

    Route::get('/coffee/delivered','CoffeeController@delivered')->name('coffees.delivered')->middleware('auth');

    Route::get('/coffee/update','CoffeeController@update')->name('coffees.update')->middleware('auth');

    Route::post('/coffee','CoffeeController@store')->name('coffee');

    Route::post('/coffee/update/{id}','CoffeeController@updateData')->name('updateData')->middleware('auth');

    Route::get('/coffee/create', 'CoffeeController@create')->name('coffees.create');

    Route::get('/coffee/{id}', 'CoffeeController@show')->name('coffees.show')->middleware('auth');

    Route::get('/coffee/update/{id}','CoffeeController@updateForm')->name('coffees.updateForm')->middleware('auth');

    Route::post('/coffee/{id}', 'CoffeeController@destroy')->name('coffees.destroy')->middleware('auth');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
