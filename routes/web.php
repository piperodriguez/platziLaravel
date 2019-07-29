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

Route::get('controlGastos/{id}');
