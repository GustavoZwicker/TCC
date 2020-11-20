<!doctype html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <meta charset="utf-8">   
        <link href="@yield('stylesheet')" rel="stylesheet">
        
    </head>
    <body>
        <div id=tela>
            <div id=headerph>
            <header id=cabecalho>
                <img  src="/img/logo.png">
                <nav id=menu>
                    <div class=links>
                        <a href= "/home"><c>Home</c></a>
                        <a href= "/universidades">Universidades</a>
                        <a href= "/welcome">Redações</a>
                        <a href= "/welcome">Quem Somos</a>
                        <a href= "/welcome">Cadastro/Login</a>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                     </li>
                        <input type="text" placeholder="Pesquise no Vestibulando">
                        <input type="submit" value="">

                    </div>
                </nav>
            </header>
            </div>
                <main id=content>
                @yield('content')
                </main>
            </div>
            <footer id=rodape>
  <div class="column"><div class=rodapeinfo><img src="/img/logo_r.png">
                    <br>Contato: gustavo.zwicker@etec.sp.gov.br</br></div></div>
  <div class="column"><div class=rodapeinfo2>Copyright (c) - 2020 Vestibulando Informação e Vestibulares
                    <p>Todos os direitos reservados</p></div></div>
</footer>
        </div>
    </body>
</html>