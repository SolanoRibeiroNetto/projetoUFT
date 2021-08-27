@extends('templateAdm')

@section('main')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Nova Pessoa</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputNomeCompleto" type="text" placeholder="Nome completo"/>
                                        <label for="inputNomeCompleto">Nome completo</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputCpf" type="number" placeholder="CPF"/>
                                        <label for="inputCpf">CPF</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputDataNasc" type="data" placeholder="Data da nescimento" />
                                        <label for="inputDataNasc">Data de nascimento</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputCidade" type="text" placeholder="Sexo" />
                                        <label for="inputCidade">Sexo</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <label for="inputSelect"></label>
                                        <select class="form-control" id="inputSelect"  style="padding-top: 5px">
                                            <option selected disabled>Selecione uma opção</option>
                                            <option value="1">Professor</option>
                                            <option value="2">Aluno</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><a class="btn btn-primary btn-block" href="#">Registar</a></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection