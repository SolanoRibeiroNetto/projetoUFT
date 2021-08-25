<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtividadeAlunosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividade_alunos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('alunos')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('tipo_atividade_id');
            $table->foreign('tipo_atividade_id')->references('id')->on('tipo_atividades')->onUpdate('cascade')->onDelete('cascade');
            $table->string('quantidade_horas', 12);
            $table->string('horas_aprovadas', 12)->nullable();
            $table->enum('status', ['PENDENTE', 'APROVADO', 'RECUSADO'])->default('PENDENTE');
            $table->string('observacao')->nullable();
            $table->string('anexo')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('atividade_alunos');
    }
}
