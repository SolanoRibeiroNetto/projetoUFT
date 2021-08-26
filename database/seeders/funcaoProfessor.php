<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class funcaoProfessor extends Seeder
{
    static $funcaoes_professores= array(
        array("funcao_id" => 1, "curso_id" => 3, "professor_id" => 1, "data_inicio" => "2021-01-01")
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        foreach(self::$funcaoes_professores as $funcao_professor){
            DB::table('funcoes_professores')->insert([
                'funcao_id' => $funcao_professor['funcao_id'],
                'curso_id' => $funcao_professor['curso_id'],
                'data_inicio' => $funcao_professor['data_inicio'],
                'professor_id' => $funcao_professor['professor_id']
            ]);

        }
    }
}
