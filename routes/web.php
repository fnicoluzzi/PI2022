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

Route::get('/home', function () {
    return view('home');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/coletas/novo', 'App\Http\Controllers\ColetasController@create');
Route::post('/coletas/novo', 'App\Http\Controllers\ColetasController@store')->name('registrar_coletas');
Route::get('/coletas/ver/{id}', 'App\Http\Controllers\ColetasController@show');
Route::get('/coletas/editar/{id}', 'App\Http\Controllers\ColetasController@edit');
Route::post('/coletas/editar/{id}', 'App\Http\Controllers\ColetasController@update')->name('alterar_coletas');
Route::get('/coletas/excluir/{id}', 'App\Http\Controllers\ColetasController@delete');
Route::post('/coletas/excluir/{id}', 'App\Http\Controllers\ColetasController@destroy')->name('excluir_coletas');
Route::get('/coletas/index', 'App\Http\Controllers\ColetasController@index');


Route::get('/retiras/novo', 'App\Http\Controllers\RetirasController@create');
Route::post('/retiras/novo', 'App\Http\Controllers\RetirasController@store')->name('registrar_retiras');
Route::get('/retiras/ver/{id}', 'App\Http\Controllers\RetirasController@show');
Route::get('/retiras/editar/{id}', 'App\Http\Controllers\RetirasController@edit');
Route::post('/retiras/editar/{id}', 'App\Http\Controllers\RetirasController@update')->name('alterar_retiras');
Route::get('/retiras/excluir/{id}', 'App\Http\Controllers\RetirasController@delete');
Route::post('/retiras/excluir/{id}', 'App\Http\Controllers\RetirasController@destroy')->name('excluir_retiras');
Route::get('/retiras/index', 'App\Http\Controllers\RetirasController@index');

Route::get('/users/novo', 'App\Http\Controllers\usersController@create');
Route::post('/users/novo', 'App\Http\Controllers\usersController@store')->name('registrar_users');


Route::get('/adm/index', 'App\Http\Controllers\ColetasController@index');
Route::get('/retiras/retira_index', 'App\Http\Controllers\ColetasController@index');