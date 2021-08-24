<?php

namespace App\Http\Controllers;

use App\Models\funcoes_professores;
use App\Models\PessoaFisica;
use App\Models\Professor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function logar(Request $request){
        
        $user = User::where('email', $request->email)->where('password', $request->password)->first();

        if(!empty($user)){

            $acesso = funcoes_professores::from('funcoes_professores as fp')
            ->select('fp.*', 'f.nome as funcao')
            ->join('professores as p', 'p.id', 'fp.professor_id')
            ->join('pessoa_fisicas as pf', 'pf.id', 'p.pessoa_fisica_id')
            ->join('funcoes as f', 'f.id', 'fp.funcao_id')
            ->where('pf.user_id', $user->id)->where('f.nome', 'COORDENADOR')->first();

            if(!empty($acesso)){
                return Redirect()->Route('coordenador.home');
            }
                // $acesso = funcoes_professores::where('professor_id', $professor->id)->where(funcao)
                //return view('aluno.')
            //}
        }
    }
}
