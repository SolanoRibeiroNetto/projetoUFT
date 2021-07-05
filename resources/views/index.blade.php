<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    {{-- <link rel="stylesheet" href="./style.css" /> --}}
    
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"
      crossorigin="anonymous"
    ></script>

    <title>Atividades complementares</title>
  </head>
  <body>
    <!--MENU-->
    <header id="header">
      <nav class="container-menu">
        <a class="logo" href="#">Atividades<span>UFT</span>.</a>
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#login">Login</a></li>
          </ul>
        </div>
      </nav>
    </header>

    <!--MAIN-->

    <main>
      <!--HOME-->
      <div class="container principal">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
            <div class="comunicado">
              <h3>Comunicados</h3>
              <div class="alert alert-info" role="alert">
                <h5>
                  Resultado de análise das atividades complementares 2021/1
                </h5>
                <p>Quarta-feira, 30 de junho de 2021</p>
              </div>
              <div class="alert alert-info" role="alert">
                <h5>
                  Inscrições abertas para atividades complementares na
                  modalidade ensino
                </h5>
                <p>Quarta-feira, 5 de Maio de 2021</p>
              </div>
              <div class="alert alert-info" role="alert">
                <h5>Atenção: Envio de atividades complementares 2021/1</h5>
                <p>Quarta-feira, 5 de Maio de 2021</p>
              </div>
              <div class="alert alert-info" role="alert">
                <h5>Atenção: Envio de atividades complementares 2021/1</h5>
                <p>Quarta-feira, 5 de Maio de 2021</p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4" id="login">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
              <div class="card-header">
                <h3 class="text-center font-weight-light my-4">Login</h3>
              </div>
              <div class="card-body">
                <form>
                  <div class="form-floating mb-3">
                    <input
                      class="form-control"
                      id="inputEmail"
                      type="email"
                      placeholder="name@example.com"
                    />
                    <label for="inputEmail">E-mail</label>
                  </div>
                  <div class="form-floating mb-3">
                    <input
                      class="form-control"
                      id="inputPassword"
                      type="password"
                      placeholder="Password"
                    />
                    <label for="inputPassword">Senha</label>
                  </div>
                  <div class="form-check mb-3">
                    <input
                      class="form-check-input"
                      id="inputRememberPassword"
                      type="checkbox"
                      value=""
                    />
                    <label class="form-check-label" for="inputRememberPassword"
                      >Lembrar senha</label
                    >
                  </div>
                  <div
                    class="
                      d-flex
                      align-items-center
                      justify-content-between
                      mt-4
                      mb-0
                    "
                  >
                    <a class="small" href="senha.html">Esqueceu a senha?</a>
                    <a class="btn btn-primary" href="#">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </body>
</html>
