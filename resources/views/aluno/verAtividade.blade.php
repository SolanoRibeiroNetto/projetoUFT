@extends('templateAluno')

@section('main')
<div style="margin: 50px">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Minhas Atividades 
            <div style="float: right;">Total de creditos 10/209</div>
            
        </div>
        <div class="card-body">
            <table class="table table-striped mt-4 datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Modalidade</th>
                        <th>Creditos</th>
                        <th>Tipo</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach($atividades as $atividade)
                    @php
                        $i++;
                    @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $atividade->tipo->modalidade->nome }}</td>
                            <td>{{ $atividade->tipo->credito }}</td>
                            <td>{{ $atividade->tipo->descricao }}</td>
                            <td>{{ $atividade->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>         
        </div>
    </div>
<div>
@endsection
