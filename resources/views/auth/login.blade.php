<!doctype html>
<html>
    
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Vestibulando</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="/css/login.css" rel="stylesheet">
    </head>
    <body>
        <div id=tela>
            <div id=headerph>
            <header id=cabecalho>
                <img  src="/img/logo.png">
                <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand d-lg-none" href="#">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <nav id=menu>
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
                             <a class="nav-link" href="#">Quem Somos</a>
                          </li>
                          <li class="nav-item">
                                <a class="nav-link" href="/login">Cadastro/Login</a>
                         </li>
                         
                        </ul>
                    </nav>
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
            </header>
            </div>
            </div>

<div class="content">

            <div id=retangulo> 
                <h1>LOGIN</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="categorias">
                            <label>E-mail</label>
                                <input id="text" type="email" size="70" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></br></br>

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label>Senha</label>


                                <input id="text" type="password" size="70" @error('password') is-invalid @enderror name="password" required autocomplete="current-password"></br></br>

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    <div class="col-sm">
                                        <a class="cadastrese" href="/cadastro">Não tem um conta? Cadastre-se </a>
                                        </div>
                            <div class="col-sm">
                                <button class="botao" type="submit" value="LOGIN">
                                    {{ __('Login') }}
                                </button>
                        </div><div class="rpass">             
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id=rodape>
                    <div class="row">
                        <div class="column"><div class=rodapeinfo><img src="/img/logo_r.png">
                        <br>Contato: gustavo.zwicker@etec.sp.gov.br</br></div></div>
                        <div class="column"><div class=rodapeinfo2>Copyright (c) - 2020 Vestibulando Informação e Vestibulares
                        <p>Todos os direitos reservados</p></div></div>
                    </div>
                    </div>
                    </div>
                    <b></b>
                </div>
                <script src="https://use.fontawesome.com/edfa239d55.js"></script>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
            </body>
        </html>