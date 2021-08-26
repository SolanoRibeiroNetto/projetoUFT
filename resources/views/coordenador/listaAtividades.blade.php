@extends('templateCoordenador')

@section('main')

<div class="container container-lista">
  <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th scope="col">Aluno</th>
        <th scope="col">Atividade</th>
        <th scope="col">Data</th>
        <th scope="col">Detalhes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">Wanderson oliveira Bueno</th>
        <td>II - Atividades de monitoria (por semestre)</td>
        <td>25/08/2021</td>
        <td>Mais Detalhes</td>
      </tr>
      <tr>
        <th scope="row">Paulo</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">Pedro</th>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div>


@endsection