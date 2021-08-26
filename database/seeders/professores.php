<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class professores extends Seeder
{
    static $professores= array(
        array("matricula_docente" => "3321", "pessoa_fisica_id" => 8)
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        foreach(self::$professores as $professor){
            DB::table('professores')->insert([
                'matricula_docente' => $professor['matricula_docente'],
                'pessoa_fisica_id' => $professor['pessoa_fisica_id']
            ]);

        }
    }
}
