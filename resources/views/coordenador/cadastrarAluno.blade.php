@extends('templateCoordenador')

@section('main')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Novo aluno</h3></div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                        <label for="inputFirstName">Nome</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                        <label for="inputLastName">Sobrenome</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                            <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="data" placeholder="Enter your last name" />
                                        <label for="inputFirstName">CPF</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputFirstName" type="data" placeholder="Enter your last name" />
                                        <label for="inputFirstName">Data de nascimento</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                        <label for="inputLastName">Cidade</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                        <label for="inputLastName">UF</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                        <label for="inputEmail">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputEmail" type="text" placeholder="Enter your last name" />
                                        <label for="inputEmail">Telefone</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                        <label for="inputPassword">Senha</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                        <label for="inputPasswordConfirm">Confirmar Senha</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Registar</a></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection