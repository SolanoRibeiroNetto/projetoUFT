<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(pessoaFisica::class);
        $this->call(cursos::class);
        $this->call(alunos::class);
        $this->call(funcoes::class);
        $this->call(professores::class);
        $this->call(funcaoProfessor::class);
        $this->call(modalidades::class);
        $this->call(tipoAtividade::class);
    }
}
