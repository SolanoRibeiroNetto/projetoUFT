<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Adm Coordenador</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>

        <link href="{{ asset('css/novo/styles.css') }}" rel="stylesheet">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.quicksearch/2.3.1/jquery.quicksearch.js"></script>

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="/coordenador">Adm Coordenador</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="/coordenador/">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Início
                            </a>
                            <div class="sb-sidenav-menu-heading">Ação</div>
                            <!--                          
                            <a class="nav-link" href="/coordenador/cadastro">
                                <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                                Cadastrar Aluno
                            </a>
                            -->
                            <a class="nav-link" href="{{ route('coordenador.alunos') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Alunos Cadastrados
                            </a>
                            <!-- 
                            <a class="nav-link" href="/coordenador/aprovar">
                                <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>
                                Aprovar Atividade
                            </a>
                             -->
                            <a class="nav-link" href="{{ route('coordenador.atividades') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Lista de Atividades
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">SIAC - UFT</div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
                     @yield('main')
                     

                </main>
                <footer class="py-4 bg-light mt-auto"> 
                    <div class="text-muted" style="text-align: center">Copyright &copy; Atividade Complementar</div>    
                </footer>
            </div>
            
        </div>
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

        <script src="{{ asset('/js/scripts.js') }}" defer></script>
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/demo/chart-area-demo.js') }}" defer></script>
        <script src="{{ asset('/js/demo/chart-bar-demo.js') }}" defer></script>

        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('/js/datatables-simple-demo.js') }}" defer></script>
        
    </body>
</html>
