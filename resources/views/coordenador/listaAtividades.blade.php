@extends('templateCoordenador')

@section('main')

<div class="container container-lista">
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
                <td>
                  <a href="{{ route('cordenador.atividade.aprovar', ['id' => $atividade->id]) }}" class="btn btn-primary btn-sm">Aprovar</a>
                  <a href="{{ route('cordenador.atividade.recusar', ['id' => $atividade->id]) }}" class="btn btn-danger btn-sm">Recusar</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>


@endsection