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

Route::get('/consulta/listar','Consulta@listar');
Route::get('/consulta/adicionar','Consulta@adicionar');
Route::get('/medico/listar','Medico@listar');
Route::get('/medico/adicionar','Medico@adicionar');
Route::get('/especialidade/listar','Especialidade@listar');
Route::get('/especialidade/adicionar','Especialidade@adicionar');


Route::get('/home','Album@Listar');


Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/contato', function () {
    return view('contato');
});
