@extends('templateCoordenador')

@section('main')

<div class="container container-lista">
  <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col">Aluno</th>
        <th scope="col">Atividade</th>
        <th scope="col">Data</th>
        <th scope="col">Ação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Wanderson oliveira Bueno</th>
        <td>II - Atividades de monitoria (por semestre)</td>
        <td>25/08/2021</td>
        <td>
          <button type="button" class="btn btn-primary btn-sm">Aprovar</button>
          <button type="button" class="btn btn-danger btn-sm">Recusar</button>
        </td>
      </tr>
      <tr>
        <th scope="row">Paulo</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>
          <button type="button" class="btn btn-primary btn-sm">Aprovada</button>
        </td>
      </tr>
      <tr>
        <th scope="row">Pedro</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>
        <button type="button" class="btn btn-danger btn-sm">Recusada</button>
        </td>
      </tr>
    </tbody>
  </table>
</div>


@endsection