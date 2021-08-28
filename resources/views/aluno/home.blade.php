@extends('templateAluno')

@section('main')
<div style="margin: 30px">
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Enviar Atividade</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('aluno.atividade.enviar') }}">Ver detalhes</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Ver todas atividades</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{ route('aluno.atividades') }}">Ver detalhes</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection
