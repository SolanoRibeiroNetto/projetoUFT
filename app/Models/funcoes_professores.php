<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class funcoes_professores extends Model
{
    use HasFactory;

    protected $table = 'funcoes_professores';

    protected $fillable = ['data_inicio', 'funcao_id', 'professor_id'];
}
