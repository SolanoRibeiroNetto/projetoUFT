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
    return view('index');
});

/*************** ROTAS DO ALUNO ***************/
Route::get('/aluno', function () {
    return view('aluno/home');
});
Route::get('/aluno/enviar', function () {
    return view('aluno/enviarAtividade');
});
Route::get('/aluno/ver', function () {
    return view('aluno/verAtividade');
});

/*************** ROTAS DO COORDENADOR ***************/
Route::get('/coordenador', function () {
    return view('coordenador/home');
});
Route::get('/coordenador/cadastro', function () {
    return view('coordenador/cadastrarAluno');
});