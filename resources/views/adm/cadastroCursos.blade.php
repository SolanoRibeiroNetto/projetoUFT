@extends('templateAdm')

@section('main')
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="card shadow-lg border-0 rounded-lg mt-5">
                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Novo Curso</h3></div>
                    <div class="card-body">
                        <form action="{{ route('curso.store') }}" method="post" class="mt-4" autocomplete="off">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-floating mb-3 mb-md-0">
                                        <input class="form-control" name="nome" id="nome" type="text" placeholder="Nome do curso"/>
                                        <label for="nome">Nome do curso</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 mb-0">
                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Registar</button></div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
@endsection