<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class tipoAtividade extends Seeder
{
    static $tipo_atividades= array(
        array("descricao" => "Disciplinas complementares não previstas no currículo dos Cursos e cursadas na UFT e em outra IES (por Disciplina)", "codigo" => "I-I", "credito" => "5", "modalidade_id" => 1),
        array("descricao" => "Atividades de monitoria (por semestre)", "codigo" => "I-II", "credito" => "5", "modalidade_id" => 1),
        array("descricao" => "Organizar e ministrar mini-cursos (por mini-curso)", "codigo" => "I-III", "credito" => "5", "modalidade_id" => 1),
        array("descricao" => "Participação como ouvinte em mini-cursos (por mini-curso)", "codigo" => "I-IV", "credito" => "3", "modalidade_id" => 1),
        array("descricao" => "Cursos nas áreas de informática ou língua estrangeira (por curso)", "codigo" => "I-V", "credito" => "2", "modalidade_id" => 1),
        array("descricao" => "Livro Publicado", "codigo" => "I-I", "credito" => "50", "modalidade_id" => 2),
        array("descricao" => "Capítulo de Livro", "codigo" => "I-II", "credito" => "20", "modalidade_id" => 2),
        array("descricao" => "Projetos de Iniciação Científica", "codigo" => "I-III", "credito" => "15", "modalidade_id" => 2),
        array("descricao" => "Projetos de Pesquisa Institucionais", "codigo" => "I-IV", "credito" => "10", "modalidade_id" => 2),
        array("descricao" => "Artigo publicado como autor (periódico com onselho editorial)", "codigo" => "I-V", "credito" => "10", "modalidade_id" => 2),
        array("descricao" => "Artigo publicado como co-autor (periódico com conselho editorial)", "codigo" => "I-VI", "credito" => "5", "modalidade_id" => 2),
        array("descricao" => "Artigo completo publicado em anais como autor", "codigo" => "I-VII", "credito" => "5", "modalidade_id" => 2),
        array("descricao" => "Artigo completo publicado em anais como autor", "codigo" => "I-VIII", "credito" => "3", "modalidade_id" => 2),
        array("descricao" => "Resumo em anais", "codigo" => "I-IX", "credito" => "3", "modalidade_id" => 2),
        array("descricao" => "Participação em grupos institucionais de trabalhos e estudos.", "codigo" => "I-X", "credito" => "3", "modalidade_id" => 2),
        array("descricao" => "Autoria e execução de projetos", "codigo" => "I-I", "credito" => "15", "modalidade_id" => 3),
        array("descricao" => "Participação na organização de eventos (congressos, seminários, workshop, etc.)", "codigo" => "I-II", "credito" => "10", "modalidade_id" => 3),
        array("descricao" => "Participação como conferencista em (conferências, palestras, mesas-redondas, etc.)", "codigo" => "I-III", "credito" => "10", "modalidade_id" => 3),
        array("descricao" => "Participação como ouvinte em eventos (congressos, seminários, workshop, etc.)", "codigo" => "I-IV", "credito" => "5", "modalidade_id" => 3),
        array("descricao" => "Apresentação oral de trabalhos em (congressos, seminários, workshop, etc.)", "codigo" => "I-V", "credito" => "5", "modalidade_id" => 3),
        array("descricao" => "Participação como ouvinte em (conferências, palestras, mesas-redondas, etc.)", "codigo" => "I-VI", "credito" => "3", "modalidade_id" => 3),
        array("descricao" => "Apresentação de trabalhos em painéis e congêneres em (congressos, seminários, workshop, etc.)", "codigo" => "I-VII", "credito" => "3", "modalidade_id" => 3),
        array("descricao" => "Participação em oficinas", "codigo" => "I-VIII", "credito" => "3", "modalidade_id" => 3),
        array("descricao" => "Visitas técnicas", "codigo" => "I-IX", "credito" => "3", "modalidade_id" => 3),
        array("descricao" => "Estágios extracurriculares (cada 80 horas)", "codigo" => "I-X", "credito" => "3", "modalidade_id" => 3),
        array("descricao" => "Representação discente em órgãos colegiados (CONSUNI, CONSEPE, etc. por semestre)", "codigo" => "I-XI", "credito" => "3", "modalidade_id" => 3),
        array("descricao" => "Representação discente (UNE, UEE, DCE, CAs etc. por semestre)", "codigo" => "I-XII", "credito" => "2", "modalidade_id" => 3),
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(self::$tipo_atividades as $tipo_atividade){
            DB::table('tipo_atividades')->insert([
                'descricao' => $tipo_atividade['descricao'],
                'credito' => $tipo_atividade['credito'],
                'modalidade_id' => $tipo_atividade['modalidade_id'],
                'codigo' => $tipo_atividade['codigo']
            ]);

        }
    }
}
