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

Route::get('/', 'App\Http\Controllers\HomeController@homePage');
Route::get('/listagem', 'App\Http\Controllers\RegisterController@listingPageGuitars');
Route::get('/cadastrar', 'App\Http\Controllers\RegisterController@registerPageGuitar');
Route::post('/cadastrar', 'App\Http\Controllers\RegisterController@saveGuitar');
Route::get('/editar/{id}', 'App\Http\Controllers\RegisterController@editGuitar');
Route::put('/editar/{id}', 'App\Http\Controllers\RegisterController@saveGuitarEdit');
Route::get('/deletar/{id}', 'App\Http\Controllers\RegisterController@deleteGuitar');





