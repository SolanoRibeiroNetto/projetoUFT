@extends('templateAdm')

@section('main')
<div style="margin: 50px">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Lista de Funções
            <a class="btn btn-primary btn-sm" style="float: right;" href="{{ route('funcao.create') }}">Novo registro</a>
        </div>
        <div class="card-body">
            <table class="table table-striped mt-4 datatablesSimple">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Função</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach($funcoes as $funcao)
                    @php
                        $i++;
                    @endphp
                    <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $funcao->nome }}</td>
                            <td class="d-flex">
                                {{-- <a class="mr-3 btn btn-sm btn-outline-success" href="{{ route('funcao.edit', ['id' => $funcao->id]) }}">Editar</a> --}}
                                <form action="{{ route('funcao.delete', ['funcao' => $funcao->id]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-sm btn-outline-danger" type="submit" value="Remover">
                                </form>
                            </td>
                        </tr>
                    @endforeach             
                </tbody>
            </table>
        </div>
    </div>
<div>
@endsection
