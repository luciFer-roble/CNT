<?php

use Illuminate\Http\Request;

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

Route::get('getTerminales','ConsultasController@getTerminales')->name('getTerminales');
Route::get('getPlanesPrepago','ConsultasController@getPlanesPrepago')->name('getPlanesPrepago');
Route::get('getPlanesPospago','ConsultasController@getPlanesPospago')->name('getPlanesPospago');
Route::get('getPromociones','ConsultasController@getPromociones')->name('getPromociones');
Route::get('getTelefoniaFija','ConsultasController@getTelefoniaFija')->name('getTelefoniaFija');
Route::get('getInternetFijo','ConsultasController@getInternetFijo')->name('getInternetFijo');
Route::get('getTarifasInternetFijo','ConsultasController@getTarifasInternetFijo')->name('getTarifasInternetFijo');
