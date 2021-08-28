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


/*************** ROTAS DO ADM ***************/
Route::get('/adm', function () {
    return view('adm/home');
});
Route::get('/adm/pessoas', function () {
    return view('adm/listaPessoas');
});
Route::get('/adm/pessoas/cadastro', function () {
    return view('adm/cadastroPessoas');
});
Route::get('/adm/funcoes', function () {
    return view('adm/listaFuncoes');
});
Route::get('/adm/funcoes/cadastro', function () {
    return view('adm/cadastroFuncoes');
});

//rotas de cursos

Route::get('/adm/cursos', 'App\Http\Controllers\CursoController@index')->name('cursos.index');
Route::get('/adm/curso/create', 'App\Http\Controllers\CursoController@create')->name('curso.create');
Route::post('/curso/store', 'App\Http\Controllers\CursoController@store')->name('curso.store');
Route::put('/curso/update/{id}', 'App\Http\Controllers\CursoController@update')->name('curso.update');
Route::delete('/curso/delete/{curso}', 'App\Http\Controllers\CursoController@destroy')->name('curso.delete');
Route::get('/curso/edit/{id}', 'App\Http\Controllers\CursoController@edit')->name('curso.edit');

//rota de Funções
Route::get('/adm/funcoes', 'App\Http\Controllers\FuncaoController@index')->name('funcoes.index');
Route::get('/adm/funcoes/create', 'App\Http\Controllers\FuncaoController@create')->name('funcao.create');
Route::post('/funcoes/store', 'App\Http\Controllers\FuncaoController@store')->name('funcao.store');
Route::put('/funcoes/update/{id}', 'App\Http\Controllers\FuncaoController@update')->name('funcao.update');
Route::delete('/funcoes/delete/{curso}', 'App\Http\Controllers\FuncaoController@destroy')->name('funcao.delete');
Route::get('/funcoes/edit/{id}', 'App\Http\Controllers\FuncaoController@edit')->name('funcao.edit');





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


/*************** ROTAS DO ALUNO ***************/
Route::get('/adm', function () {
    return view('adm.home');
})->name('adm.home');
