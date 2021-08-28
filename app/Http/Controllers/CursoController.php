<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() 
    {
        $cursos = Cursos::all();
        return view('adm/listaCursos', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adm/cadastroCursos');
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

        $curso = new Cursos();

        $curso->nome = $request->nome;

        $curso->save();

        if(!empty($curso->id)){
            return redirect()->route('cursos.index')->with('status', 'Cursos cadastrado com Sucesso!');
        }else{
            return redirect()->back()->with('status', 'Erro ao salvar curso!');
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
        $curso = Cursos::where('id', $id)->first();
        return view('adm/cadastroCursos', ['curso' => $curso]);
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

        $curso = Cursos::where('id', $id)->first();

        $curso->nome = $request->nome;

        $curso->save();

        return redirect()->route('cursos.index')->with('status', 'Cursos Atualizado com Sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso = Cursos::where('id', $id)->first();
        $curso->delete();

        return redirect()->route('cursos.index')->with('status', 'Curso Removido Com Sucesso.');
    
    }
}
