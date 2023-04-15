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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/contato','App\Http\Controllers\ContatoController@contatos');

Route::get('/contato/{id}','App\Http\Controllers\ContatoController@contatoById');

Route::post('/contato','App\Http\Controllers\ContatoController@contatoSalvar');

Route::delete('/contato/{id}','App\Http\Controllers\ContatoController@deleteContatoById');