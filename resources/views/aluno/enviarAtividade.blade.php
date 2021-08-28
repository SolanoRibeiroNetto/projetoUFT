@extends('templateAluno')

@section('main')
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Optional JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<main>
                    <div class="container cont-atividade">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Nova Atividade</h3></div>
                                    <div class="card-body">
                                        <form action="{{ route('atividade.store') }}" method="post" class="mt-4" autocomplete="off" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-12">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="modalidade">Selecionar modalidade</label>
                                                        <select class="form-control" id="modalidade" name="modalidade" onchange="selecionaModalidade();">
                                                            <option value="" selected> </option>
                                                            @foreach ($modalidades as $modalidade)
                                                            <option value="{{$modalidade->id}}">{{$modalidade->nome}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="tipo">Selecionar Tipo</label>
                                                        <select class="form-control" id="tipo" name="tipo">
                                                            <option value="" selected> </option>
                                                            @foreach ($tipos as $tipo)
                                                            <option style="display: none" class="p-1" id="modalidade-{{$tipo->modalidade_id}}-{{$tipo->id}}" value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row mb-12">
                                                <div class="form-group">
                                                    <div><label for="horas">horas do certificado</label></div>
                                                    <input type="text" class="form-control-file" id="horas" name="horas">
                                                  </div>
                                            </div><br>
                                            <div class="row mb-12">
                                                <div class="form-group">
                                                    <div><label for="anexo">Anexar certificado</label></div>
                                                    <input type="file" class="form-control-file" id="anexo" name="anexo">
                                                  </div>
                                            </div>
                                            
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" class="btn btn-primary btn-block">Enviar</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <script type="text/javascript">


                    // função para selecionar o tipo de pessoa a ser salva
                    function selecionaModalidade(){
                        var d = document.getElementById('modalidade');
                        
                        var display = d.options[d.selectedIndex].value;
                        if(display == "1"){
                            
                            
                            document.getElementById('modalidade-1-1').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-1-2').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-1-3').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-1-4').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-1-5').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-6').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-7').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-8').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-9').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-10').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-11').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-12').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-13').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-14').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-15').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-16').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-17').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-18').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-19').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-20').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-21').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-22').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-23').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-24').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-25').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-26').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-27').setAttribute("style", "display: none;");
    
                        }else if(display == "2"){
    
                            document.getElementById('modalidade-1-1').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-2').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-3').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-4').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-5').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-6').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-7').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-8').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-9').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-10').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-11').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-12').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-13').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-14').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-2-15').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-16').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-17').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-18').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-19').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-20').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-21').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-22').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-23').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-24').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-25').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-26').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-27').setAttribute("style", "display: none;");
    
                        }else if(display == "3"){
    
                            document.getElementById('modalidade-1-1').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-2').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-3').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-4').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-5').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-6').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-7').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-8').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-9').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-10').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-11').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-12').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-13').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-14').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-15').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-16').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-17').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-18').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-19').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-20').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-21').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-22').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-23').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-24').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-25').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-26').setAttribute("style", "display: block;");
                            document.getElementById('modalidade-3-27').setAttribute("style", "display: block;");
    
                        } 
                        else{
                            document.getElementById('modalidade-1-1').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-2').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-3').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-4').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-1-5').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-6').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-7').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-8').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-9').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-10').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-11').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-12').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-13').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-14').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-2-15').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-16').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-17').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-18').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-19').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-20').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-21').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-22').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-23').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-24').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-25').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-26').setAttribute("style", "display: none;");
                            document.getElementById('modalidade-3-27').setAttribute("style", "display: none;");
    
                        }
                        
                    }
    
            </script>
@endsection