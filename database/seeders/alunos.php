<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class alunos extends Seeder
{
    static $alunos= array(
        array("codigo_matricula" => "20211", "pessoa_fisica_id" => 2, "curso_id" => 1, "data_matricula" => "2021-03-24"),
        array("codigo_matricula" => "20212", "pessoa_fisica_id" => 3, "curso_id" => 2, "data_matricula" => "2021-03-24"),
        array("codigo_matricula" => "20213", "pessoa_fisica_id" => 5, "curso_id" => 3, "data_matricula" => "2021-03-24"),
        array("codigo_matricula" => "20214", "pessoa_fisica_id" => 6, "curso_id" => 4, "data_matricula" => "2021-03-24"),
        array("codigo_matricula" => "20215", "pessoa_fisica_id" => 7, "curso_id" => 5, "data_matricula" => "2021-03-24"),
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        foreach(self::$alunos as $aluno){
            DB::table('alunos')->insert([
                'codigo_matricula' => $aluno['codigo_matricula'],
                'data_matricula' => $aluno['data_matricula'],
                'pessoa_fisica_id' => $aluno['pessoa_fisica_id'],
                'curso_id' => $aluno['curso_id']
            ]);

        }
    }
}

