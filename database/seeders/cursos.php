<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class cursos extends Seeder
{
    static $cursos= array(
        array("nome" => "ARQUITETURA"),
        array("nome" => "DIREITO"),
        array("nome" => "CIENCIAS DA COMPUTAÇÃO"),
        array("nome" => "TEATRO"),
        array("nome" => "MEDICINA"),
        array("nome" => "FILOSOFIA"),
        array("nome" => "ENGENHARIA CIVIL")
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$cursos as $curso){
            DB::table('cursos')->insert([
                'nome' => $curso['nome']
            ]);

        }
    }
}
