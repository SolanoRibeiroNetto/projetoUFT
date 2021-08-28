<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\funcoes_professores;
use App\Models\PessoaFisica;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function logar(Request $request){
        
        $user = PessoaFisica::where('email', $request->email)->where('password', $request->password)->first();
        if(!empty($user)){

            if($user->nome == "admin"){
                session()->put('User', $user);
                return Redirect()->Route('adm.home');
            }

            $acessoProfessor = funcoes_professores::from('funcoes_professores as fp')
            ->select('fp.*', 'f.nome as funcao')
            ->join('professores as p', 'p.id', 'fp.professor_id')
            ->join('pessoa_fisicas as pf', 'pf.id', 'p.pessoa_fisica_id')
            ->join('funcoes as f', 'f.id', 'fp.funcao_id')
            ->where('pf.id', $user->id)->where('f.nome', 'COORDENADOR')->first();

            if(!empty($acessoProfessor)){
                session()->put('User', $user);
                return Redirect()->Route('coordenador.home');
            }
            
            $acessoAluno = Aluno::where('pessoa_fisica_id', $user->id)->first();

            if(!empty($acessoAluno)){
                session()->put('User', $user);
                return Redirect()->Route('aluno.home');
            }

            return Redirect()->back()->with('erro', 'usuario não possui acesso ao sistema.');
        }
    }
}
