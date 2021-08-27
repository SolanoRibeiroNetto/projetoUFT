@extends('templateAdm')

@section('main')
<div style="margin: 50px">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Lista de cursos
            <a href="/adm/cursos/cadastro"><button type="button" class="btn btn-primary btn-sm" style="float: right;">Novo registro</button></a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th width="80%">Nome do curso</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome do curso</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Ciência da computação</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>                    
                    </tr>
                    <tr>
                        <td>Engenharia Eletrica</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>  
                    <tr>
                        <td>Direito</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>                 
                </tbody>
            </table>
        </div>
    </div>
<div>
@endsection
