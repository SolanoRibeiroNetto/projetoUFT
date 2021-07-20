<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AtividadeAluno extends Model
{
    use HasFactory;

    protected $table = 'atividade_alunos';

    protected $fillable = ['horas_aprovadas', 'quantidade_horas', 'status', 'anexo', 'aluno_id', 'tipo_atividade_id'];
}
