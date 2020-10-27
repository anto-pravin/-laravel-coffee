<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CustomerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data/{id?}",[ApiController::class,'getData']);

Route::post("addData",[ApiController::class,'addData']);

Route::put("update",[ApiController::class,'updateData']);

Route::get('search/{name}',[ApiController::class,'searchData']);

Route::delete('delete/{id}',[ApiController::class, 'deleteData']);

Route::post('save',[ApiController::class,'testData']);

//Route::post('/coffee', [ApiController::class,'store']);