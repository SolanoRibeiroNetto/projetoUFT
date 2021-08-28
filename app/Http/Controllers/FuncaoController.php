<?php

namespace App\Http\Controllers;

use App\Models\Funcao;
use Illuminate\Http\Request;

class FuncaoController extends Controller
{
    public function index()
    {
        $funcoes = Funcao::all();
        return view('adm/listaFuncoes', ['funcoes' => $funcoes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm/cadastroFuncoes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $funcao = new Funcao();

        $funcao->nome = $request->nome;

        $funcao->save();

        if(!empty($funcao->id)){
            return redirect()->route('funcoes.index')->with('status', 'Função cadastrada com Sucesso!');
        }else{
            return redirect()->back()->with('status', 'Erro ao salvar Função!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $funcao = Funcao::where('id', $id)->first();
        return view('adm/cadastroFuncoes', ['funcao' => $funcao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required'
        ]);

        $funcao = Funcao::where('id', $id)->first();

        $funcao->nome = $request->nome;

        $funcao->save();

        return redirect()->route('funcoes.index')->with('status', 'Função Atualizada com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $funcao = Funcao::where('id', $id)->first();
        $funcao->delete();

        return redirect()->route('funcoes.index')->with('status', 'Função Removida Com Sucesso.');
    }
}
