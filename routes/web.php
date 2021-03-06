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

Route::get('/', 'HomeController@index');

Route::get('/tablero', 'TableroController@index');

//crud tabla reporte_gastos
Route::resource('/controlGastos', 'ReporteGastos');

Route::get('/controlGastos/{id}/confirmarDelete', 'ReporteGastos@confirmarDelete');


Route::get('/controlGastos/{id}/gasto/create', 'GastoController@create');
Route::post('/controlGastos/{id}/gasto/create', 'GastoController@store')->name('gasto.store');

Route::get('/controlGastos/{id}/confirmarEnvioEmail', 'ReporteGastos@ConfirmarsendEmail');
Route::post('/controlGastos/{id}/EnviarEmail', 'ReporteGastos@sendEmail')->name('send.email');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
