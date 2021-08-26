<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursosProfessores extends Model
{
    use HasFactory;

    protected $table = 'cursos_professores';

    protected $fillable = ['professor_id', 'curso_id'];

    public function professor()
    {
        return $this->hasOne(Professor::class, 'id', 'professor_id');
        //return $this->belongsToMany(ModelTurmas::class)->using(ModelCursosIntegrantesTurma::class);
    }

    public function curso()
    {
        return $this->hasOne(Cursos::class, 'id', 'curso_id');
        //return $this->belongsToMany(ModelTurmas::class)->using(ModelCursosIntegrantesTurma::class);
    }
}
