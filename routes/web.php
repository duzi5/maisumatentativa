<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogAcessoMiddleware;
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
Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('principal');
Route::post('/', 'App\Http\Controllers\PrincipalController@principal')->name('principal');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@salvar')->name('contato');


Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('sobre-nos');
Route::get('/login', 'App\Http\Controllers\SobreNosController@sobreNos');
Route::get('/fornecedores', 'App\Http\Controllers\SobreNosController@sobreNos');
Route::get('/clientes', 'App\Http\Controllers\SobreNosController@sobreNos');
Route::get('/produtos', 'App\Http\Controllers\SobreNosController@sobreNos');





