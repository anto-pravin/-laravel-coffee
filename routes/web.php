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
    
    Route::post('/coffee','CoffeeController@store')->name('coffee');

    Route::post('/coffee/update/{id}','CoffeeController@updateData')->name('updateData')->middleware('auth');

    Route::get('/coffee/create', 'CoffeeController@create')->name('coffees.create');

    Route::get('/coffee/delivered/{id}','CoffeeController@viewDel')->name('viewDel')->middleware('auth');

    Route::get('/coffee/{id}', 'CoffeeController@show')->name('coffees.show')->middleware('auth');

    Route::get('/coffee/update/{id}','CoffeeController@updateForm')->name('coffees.updateForm')->middleware('auth');

    Route::post('/coffee/{id}', 'CoffeeController@destroy')->name('coffees.destroy')->middleware('auth');

    Route::get('/confirmations/deleted/{id}','CoffeeController@delete')->name('confirmDelete')->middleware('auth');
    
    Route::delete('/coffee/delete','CoffeeController@delete')->name('delete')->middleware('auth');

    Route::get('/home','CoffeeController@home')->name('home')->middleware('auth');

    // Live Search
    Route::get('/search/search', 'SearchController@index')->name('updateSearch')->middleware('auth');

    Route::get('/live_search/action', 'SearchController@action')->name('search')->middleware('auth');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
