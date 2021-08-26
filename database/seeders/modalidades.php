<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class modalidades extends Seeder
{
    static $modalidades= array(
        array("nome" => "ENSINO", "codigo" => "I"),
        array("nome" => "PESQUISA", "codigo" => "II"),
        array("nome" => "EXTENSÃO", "codigo" => "III")
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$modalidades as $modalidade){
            DB::table('modalidades')->insert([
                'nome' => $modalidade['nome'],
                'codigo' => $modalidade['codigo']
            ]);

        }
    }
}
