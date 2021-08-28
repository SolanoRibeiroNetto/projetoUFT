@extends('templateCoordenador')

@section('main')
<div style="margin: 50px">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Alunos cadastrados
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Matricula</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Matricula</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $i=0;
                    @endphp
                    @foreach($alunos as $aluno)
                        @php
                            $i++;
                        @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $aluno->aluno->nome }}</td>
                            <td>{{ $aluno->aluno->email }}</td>
                            <td>{{ $aluno->codigo_matricula }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
<div>
@endsection
