<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class pessoaFisica extends Seeder
{
    static $pessoas= array(
        array("nome" => "admin", "email" => "admin@uft", "sexo" => "MASCULINO", "data_nascimento" => "1993-03-24", "cpf" => "222222", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "Vanessa Da Silva", "email" => "vanessa@uft", "sexo" => "FEMININO", "data_nascimento" => "1993-03-24", "cpf" => "3333333", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "Maria Jose Dos Santos", "email" => "maria@uft", "sexo" => "FEMININO", "data_nascimento" => "1993-03-24", "cpf" => "444444", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "João Paulo Reis", "email" => "joao@uft", "sexo" => "MASCULINO", "data_nascimento" => "1993-03-24", "cpf" => "5555555", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "Francisco De Paula", "email" => "francisco@uft", "sexo" => "MASCULINO", "data_nascimento" => "1993-03-24", "cpf" => "666666", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "Adriane Galisteu", "email" => "adriane@uft", "sexo" => "FEMININO", "data_nascimento" => "1993-03-24", "cpf" => "7777777", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "Linus Linux", "email" => "linus@uft", "sexo" => "MASCULINO", "data_nascimento" => "1993-03-24", "cpf" => "8888888", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "Bill Gates", "email" => "bill@uft", "sexo" => "MASCULINO", "data_nascimento" => "1993-03-24", "cpf" => "999999", "password" => "12345", "created_at" => null, "updated_at" => null),
        array("nome" => "Xuxa Meneguel", "email" => "xuxa@uft", "sexo" => "FEMININO", "data_nascimento" => "1993-03-24", "cpf" => "1111111", "password" => "12345", "created_at" => null, "updated_at" => null)
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        foreach(self::$pessoas as $pessoa){
            DB::table('pessoa_fisicas')->insert([
                'nome' => $pessoa['nome'],
                'email' => $pessoa['email'],
                'sexo' => $pessoa['sexo'],
                'data_nascimento' => $pessoa['data_nascimento'],
                'cpf' => $pessoa['cpf'],
                'password' => $pessoa['password'],
                'created_at' => $pessoa['created_at'],
                'updated_at' => $pessoa['updated_at']
            ]);

        }
    }
}
