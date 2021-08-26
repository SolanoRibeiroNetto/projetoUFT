<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class funcoes extends Seeder
{
    static $funcoes= array(
        array("nome" => "COORDENADOR", "codigo" => "2322"),
        array("nome" => "DIRETOR", "codigo" => "2321"),
        array("nome" => "SECRETARIO", "codigo" => "2323")
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$funcoes as $funcao){
            DB::table('funcoes')->insert([
                'nome' => $funcao['nome'],
                'codigo' => $funcao['codigo']
            ]);

        }
    }
}
