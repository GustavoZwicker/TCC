<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vestibulando</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="@yield('style')" />
</head>

<body>
    <header>
        <div id="header">
            <figure class="d-none d-lg-block">
                <img src="/img/logo.png">
            </figure>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand d-lg-none" href="#">
                <figure>
                    <img src="/img/logo.png">
                </figure>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/universidades">Universidades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/redacoes">Redações</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quemsomos">Quem Somos</a>
                    </li>

                    <?php if(Auth::check()){?>
                        <div class="login">
                    <li class="nav-item">
                        <div class="nav-link">Olá, {{$user->name}}</div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li></div></div>
                <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Cadastro/Login</a>
                    </li>
                <?php } ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Pesquisar" aria-label="Search" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>
                <main id=content>
                @yield('content')
                </main>
            
                <footer class="bg-dark-green text-light">
                    <div class="row">
                        <div class="col-sm">
                            <figure>
                                <img src="/img/logo_r.png" ;>
                            </figure>
                        </div>
                        <div class="col-sm text-right">
                            Copyright (c) - 2020 Vestibulando Informação e Vestibulares
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            Contato: gustavo.zwicker@etec.sp.gov.br
                        </div>
                        <div class="col-sm text-right">
                            Todos os direitos reservados
                        </div>
                    </div>
            </footer>
        </header>
        <script src="https://use.fontawesome.com/edfa239d55.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    
    </html