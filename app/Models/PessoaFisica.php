<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PessoaFisica extends Model
{
    use HasFactory;

    protected $table = 'pessoa_fisicas';

    protected $fillable = ['nome', 'cpf', 'data_nascimento', 'sexo'];
}
 