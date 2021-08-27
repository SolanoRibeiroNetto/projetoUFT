@extends('templateAdm')

@section('main')
<div style="margin: 50px">
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Alunos cadastrados
            <a href="/adm/pessoas/cadastro"><button type="button" class="btn btn-primary btn-sm" style="float: right;">Novo registro</button></a>
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>CPF</th>
                        <th>Data de Nascimento</th>
                        <th>Ação</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Wanderson Bueno</td>
                        <td>wandersom@mail</td>
                        <td>12548798514</td>
                        <td>1805/1999</td>  
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>                      
                    </tr>
                    <tr>
                        <td>Pesquisa</td>
                        <td>I – Livro Publicado;</td>
                        <td>50</td>
                        <td>1805/1999</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Extensão</td>
                        <td>I – Autoria e execução de projetos; </td>
                        <td>15</td>
                        <td>1805/1999</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Cedric Kelly</td>
                        <td>Senior Javascript Developer</td>
                        <td>Edinburgh</td>
                        <td>1805/1999</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Airi Satou</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>1805/1999</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Brielle Williamson</td>
                        <td>Integration Specialist</td>
                        <td>New York</td>
                        <td>1805/1999</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Herrod Chandler</td>
                        <td>Sales Assistant</td>
                        <td>San Francisco</td>
                        <td>1805/1999</td>
                        <td>
                            <button type="button" class="btn btn-outline-primary btn-sm">Editar</button> 
                            <button type="button" class="btn btn-outline-danger btn-sm">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Rhona Davidson</td>
                        <td>Integration Specialist</td>
                        <td>Tokyo</td>
                        
                    </tr>
                    <tr>
                        <td>Colleen Hurst</td>
                        <td>Javascript Developer</td>
                        <td>San Francisco</td>
                        
                    </tr>
                    <tr>
                        <td>Sonya Frost</td>
                        <td>Software Engineer</td>
                        <td>Edinburgh</td>
                        
                    </tr>
                    <tr>
                        <td>Jena Gaines</td>
                        <td>Office Manager</td>
                        <td>London</td>
                        
                    </tr>
                    <tr>
                        <td>Quinn Flynn</td>
                        <td>Support Lead</td>
                        <td>Edinburgh</td>
                        
                    </tr>
                    <tr>
                        <td>Charde Marshall</td>
                        <td>Regional Director</td>
                        <td>San Francisco</td>
                        
                    </tr>
                    <tr>
                        <td>Haley Kennedy</td>
                        <td>Senior Marketing Designer</td>
                        <td>London</td>
                        
                    </tr>
                    <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td>Regional Director</td>
                        <td>London</td>
                        
                    </tr>
                    <tr>
                        <td>Michael Silva</td>
                        <td>Marketing Designer</td>
                        <td>London</td>
                        
                    </tr>
                    <tr>
                        <td>Paul Byrd</td>
                        <td>Chief Financial Officer (CFO)</td>
                        <td>New York</td>
                        
                    </tr>
                    <tr>
                        <td>Gloria Little</td>
                        <td>Systems Administrator</td>
                        <td>New York</td>
                        
                    </tr>
                    <tr>
                        <td>Bradley Greer</td>
                        <td>Software Engineer</td>
                        <td>London</td>
                        
                    </tr>
                    <tr>
                        <td>Dai Rios</td>
                        <td>Personnel Lead</td>
                        <td>Edinburgh</td>
                        
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
<div>
@endsection
