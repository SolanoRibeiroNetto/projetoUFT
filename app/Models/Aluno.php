<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';

    protected $fillable = ['codigo_matricula', 'data_matricula', 'pessoa_fisica_id'];

    public function aluno()
    {
        return $this->hasOne(PessoaFisica::class, 'id', 'pessoa_fisica_id');
        //return $this->belongsToMany(ModelTurmas::class)->using(ModelCursosIntegrantesTurma::class);
    }
}
