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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


//['middleware'=>'auth:api']
Route::group(['middleware'=>'auth:api'], function(){

    Route::get('country','Country\CountryController@country');

    Route::get('countryy/{id}','Country\CountryController@countryById');

    Route::post('country','Country\CountryController@countrySave');

    Route::put('country/{id}','Country\CountryController@countryUpdate');

    Route::delete('country/{id}','Country\CountryController@countryDelete');

});









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
Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'API\UserController@details');
});













