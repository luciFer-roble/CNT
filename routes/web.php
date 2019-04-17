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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('equipos', 'HomeController@equipo')->name('equipo');




Route::get('terminales/data-table', 'TerminalesController@getTerminalesForDataTable')->name('terminales.table');

// Equipos
Route::get('equipos', 'HomeController@equipo')->name('equipo');

// Telefonia fija
Route::get('planes-telefonia-fija', 'TelefoniaFija\TelefoniaFijaPlanController@index')->name('planes-telefonia-fija');
//Route::get('planes-telefonia-fija/{id}', 'TelefoniaFija\TelefoniaFijaPlanController@show');
Route::get('planes-telefonia-fija/create', 'TelefoniaFija\TelefoniaFijaPlanController@create');
Route::post('planes-telefonia-fija', 'TelefoniaFija\TelefoniaFijaPlanController@store')->name('planes-telefonia-fija.store');
Route::get('planes-telefonia-fija/{id}/edit', 'TelefoniaFija\TelefoniaFijaPlanController@edit');
Route::put('planes-telefonia-fija/{id}', 'TelefoniaFija\TelefoniaFijaPlanController@update')->name('planes-telefonia-fija.update');
Route::delete('planes-telefonia-fija/{id}', 'TelefoniaFija\TelefoniaFijaPlanController@destroy');

// PLANES TV
Route::get('tv', 'TV\TVPlanController@show');
Route::get('tv/{id}', 'TV\TVPlanController@show');

//INTERNET FIJO
Route::get('internet_plans', 'InternetFijo\InternetFijoController@index');
Route::get('internet_plans/create', 'InternetFijo\InternetFijoController@create');
Route::get('internet_plans/{id}', 'InternetFijo\InternetFijoController@show');
Route::post('internet_plans', 'InternetFijo\InternetFijoController@store')->name('internet_plans.store');
Route::get('internet_plans/{id}/edit', 'InternetFijo\InternetFijoController@edit');
Route::put('internet_plans/{id}', 'InternetFijo\InternetFijoController@update')->name('internet_plans.update');
Route::delete('internet_plans/{id}', 'InternetFijo\InternetFijoController@destroy');
//TARIFAS INTERNET FIJO
Route::get('internet_tariffs', 'InternetFijo\TarifasInternetFijoController@index');
Route::get('internet_tariffs/create', 'InternetFijo\TarifasInternetFijoController@create');
Route::get('internet_tariffs/{id}', 'InternetFijo\TarifasInternetFijoController@show');
Route::post('internet_tariffs', 'InternetFijo\TarifasInternetFijoController@store')->name('internet_tariffs.store');
Route::get('internet_tariffs/{id}/edit', 'InternetFijo\TarifasInternetFijoController@edit');
Route::put('internet_tariffs/{id}', 'InternetFijo\TarifasInternetFijoController@update')->name('internet_tariffs.update');
Route::delete('internet_tariffs/{id}', 'InternetFijo\TarifasInternetFijoController@destroy');

//TERMINALES
Route::get('/terminales', 'TerminalController@index')->name('terminales');
Route::get('/terminales/create', 'TerminalController@create');
Route::post('/terminales', 'TerminalController@store')->name('terminales.store');
Route::get('terminales/{id}/edit', 'TerminalController@edit');
Route::put('terminales/{id}', 'TerminalController@update')->name('terminales.update');
Route::delete('terminales/{id}', 'TerminalController@destroy');


//PLAN FIHO
Route::get('/planfijo', 'HomeController@planfijo')->name('planfijo');

//Plan Movil Pospago
Route::get('/plan-movil-pospago', 'HomeController@movilpospago')->name('plan-movil-pospago');


//MOVIL POSPAGO
Route::get('/movil-pospago', 'Mobile\PlanMovilPospagoController@index')->name('movil-pospago');
Route::get('/movil-pospago/create', 'Mobile\PlanMovilPospagoController@create');
Route::post('/movil-pospago', 'Mobile\PlanMovilPospagoController@store')->name('movil-pospago.store');
Route::get('movil-pospago/{id}/edit', 'Mobile\PlanMovilPospagoController@edit');
Route::put('movil-pospago/{id}', 'Mobile\PlanMovilPospagoController@update')->name('movil-pospago.update');
Route::delete('movil-pospago/{id}', 'Mobile\PlanMovilPospagoController@destroy');


//PLAN MOVIL PREPAGO
Route::get('/movil-prepago', 'Mobile\PlanMovilPrepagoController@index')->name('movil-prepago');
Route::get('/movil-prepago/create', 'Mobile\PlanMovilPrepagoController@create');
Route::post('/movil-prepago', 'Mobile\PlanMovilPrepagoController@store')->name('movil-prepago.store');
Route::get('movil-prepago/{id}/edit', 'Mobile\PlanMovilPrepagoController@edit');
Route::put('movil-prepago/{id}', 'Mobile\PlanMovilPrepagoController@update')->name('movil-prepago.update');
Route::delete('movil-prepago/{id}', 'Mobile\PlanMovilPrepagoController@destroy');


//PROMOCIONES
Route::get('promociones','Promociones\PromoController@index');
Route::get('promociones/(id)','Promociones\PromoController@show');
Route::get('/promociones/create', 'Promociones\PromoController@create');
Route::post('/promociones', 'Promociones\PromoController@store')->name('promociones.store');
Route::get('promociones/{id}/edit', 'Promociones\PromoController@edit');
Route::put('promociones/{id}', 'Promociones\PromoController@update')->name('promociones.update');
Route::delete('promociones/{id}', 'Promociones\PromoController@destroy');
//Route::get("/equipos",function(){
//    return view("terminales.indexBack");
//});
 
