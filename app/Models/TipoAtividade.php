<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoAtividade extends Model
{
    use HasFactory;

    protected $table = 'tipo_atividades';

    protected $fillable = ['codigo', 'credito', 'modalidade_id', 'descricao'];

    public function modalidade()
    {
        return $this->hasOne(Modalidade::class, 'id', 'modalidade_id');
    }
}
