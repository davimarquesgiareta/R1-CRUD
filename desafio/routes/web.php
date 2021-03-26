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

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/listagem', 'App\Http\Controllers\CadastroController@index');
Route::get('/cadastrar', 'App\Http\Controllers\CadastroController@create');
Route::post('/cadastrar', 'App\Http\Controllers\CadastroController@store');
Route::get('/editar/{id}', 'App\Http\Controllers\CadastroController@edit');
Route::put('/editar/{id}', 'App\Http\Controllers\CadastroController@update');
Route::get('/deletar/{id}', 'App\Http\Controllers\CadastroController@destroy');





