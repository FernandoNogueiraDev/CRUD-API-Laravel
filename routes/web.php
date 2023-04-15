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



Route::get('/contato','App\Http\Controllers\ContatoController@index');

Route::post('/contato/inserir','App\Http\Controllers\ContatoController@store');

Route::get('/contato/{id}','App\Http\Controllers\ContatoController@destroy');

Route::get('/contato/{id}/editar','App\Http\Controllers\ContatoController@edit');

Route::post('/contato-alterar/{id}','App\Http\Controllers\ContatoController@update');