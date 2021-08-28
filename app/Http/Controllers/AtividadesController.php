<?php

namespace App\Http\Controllers;

use App\Models\AtividadeAluno;
use Illuminate\Http\Request;

class AtividadesController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'modalidade' => 'required',
            'tipo' => 'required'
        ]);

        $atividade = new AtividadeAluno();

        $atividade->tipo_atividade_id = $request->modalidade;
        $atividade->aluno_id = session('User')->id;
        $atividade->quantidade_horas = $request->horas;
        $atividade->status = 'PENDENTE';

        $atividade->save();

        if(!empty($atividade->id)){
            return redirect()->route('aluno.home')->with('status', 'Cursos cadastrado com Sucesso!');
        }else{
            return redirect()->back()->with('status', 'Erro ao salvar atividade!');
        }
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
