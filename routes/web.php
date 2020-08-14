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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movimientos/{id}', 'MovimientosController@index')->name('movimientos.show');

Route::get('/servicios/create', 'ServiciosController@create');
Route::post('servicios/p', 'ServiciosController@store');

Route::get('/servicios/deposit', 'ServiciosController@deposit');
Route::post('servicios/d', 'ServiciosController@storeDeposit');