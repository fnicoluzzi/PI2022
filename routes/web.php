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

Route::get('/coletas/novo', 'App\Http\Controllers\ColetasController@create');
Route::post('/coletas/novo', 'App\Http\Controllers\ColetasController@store')->name('registrar_coletas');
Route::post('/coletas/ver/(id)', 'App\Http\Controllers\ColetasController@show');

Route::get('/retiras/novo', 'App\Http\Controllers\RetirasController@create');
Route::post('/retiras/novo', 'App\Http\Controllers\RetirasController@store')->name('registrar_retiras');
Route::post('/retiras/ver/(id)', 'App\Http\Controllers\RetirasController@show');

Route::get('/users/novo', 'App\Http\Controllers\usersController@create');
Route::post('/users/novo', 'App\Http\Controllers\usersController@store')->name('registrar_users');

Route::get('/test-conn', function () {
    // Insere um novo usuário ao banco de dados:
    $user = App\Http\Controllers\usersController::create([
        'name'         => 'Carlos Ferreira',
        'email'     => 'carlos@especializati.com.br',
        'password'     => bcrypt('SenhaAqui'),
    ]);
    //Se quiser exibir os dados do usuário: 
    dd($user);
 
    // Listando os usuários
   /* $users = App\Http\Controllers\usersController::get();
 
    echo '<hr>';
    foreach ($users as $user) {
        echo "{$user->name} <br>";
    }
    echo '<hr>';*/
});