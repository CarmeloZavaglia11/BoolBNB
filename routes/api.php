<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('apartments','API\ApartmentController');

Route::get('search','API\ApartmentController@searching')->name('apiSearchingApartment');

Route::get('services','API\ServiceController@index');

Route::apiResource('clicks','API\ClickController');