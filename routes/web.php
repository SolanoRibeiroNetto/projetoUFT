<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AtividadesController;
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
//home
Route::get('/', function () {
    return view('index');
});

//logar
Route::post('/logar', 'App\Http\Controllers\LoginController@logar')->name('logar');



/*************** ROTAS DO ALUNO ***************/
Route::get('/aluno', function () {
    return view('aluno/home');
})->name('aluno.home');
Route::get('/aluno/enviar', function () {
    return view('aluno/enviarAtividade');
});

Route::post('/aluno/atividade/salvar', [AtividadesController::class, 'store'])->name('aluno.atividade.store');

Route::get('/aluno/ver', function () {
    return view('aluno/verAtividade');
});

/*************** ROTAS DO COORDENADOR ***************/
Route::get('/coordenador', function () {
    return view('coordenador/home');
})->name('coordenador.home');
Route::get('/coordenador/cadastro', function () {
    return view('coordenador/cadastrarAluno');
});
Route::get('/coordenador/alunos', function () {
    return view('coordenador/AlunosCadastrados');
});
Route::get('/coordenador/lista', function () {
    return view('coordenador/listaAtividades');
});

Route::post('/coordenador/alunos/salvar', [AlunoController::class, 'store'])->name('coordenador.aluno.store');
