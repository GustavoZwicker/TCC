<!doctype html>
<html>
    <head>
        <title>Vestibulando</title>
        <meta charset="utf-8">   
        <link href="/css/cadastro.css" rel="stylesheet">
    </head>
    <body>
        <div id=tela>
            <div id=headerph>
            <header id=cabecalho>
                <img  src="/img/logo.png">
                <nav id=menu>
                    <div class=links>
                        <a href= "/welcome"><c>Home</c></a>
                        <a href= "/welcome">Universidades</a>
                        <a href= "/welcome">Redações</a>
                        <a href= "/welcome">Quem Somos</a>
                        <a href= "/welcome">Cadastro/Login</a>
                        <input type="text" placeholder="Pesquise no Vestibulando">
                        <input type="submit" value="">

                    </div>
                </nav>
            </header>
            </div>

            <div id=content>

                    <div id=head-top> </div>
                    <div>
                    <div id=retangulo>
                    <h1> REGISTRO </h1>
                    
                    <form action="" method="">
                        <label>Nome</label>
                        <input type="text" name="txtNome" size="70" maxlength="30" /><br><br>

                        <label>E-mail</label>
                        <input type="text" name="txtEmail" size="70" maxlength="30" /><br><br>

                        <label>Gênero</label>
                        <select name = "txtGenero">
                        <option value = "txtMasculino" >Masculino</option>
                        <option value = "txtFeminino"  >Feminino</option>
                        <option value = "txtNaoBinario"  >Não Binário</option>
                        <option value = "txtInterSex"  >InterSex</option>
                        <option value = "txtOutro" >Outro</option>
                        <option value = "txtNenhum" selected >Prefiro não dizer</option>
                        </select></br></br>

                        <label>Data de Nascimento</label>
                        <input type="date" name="txtData" size="50" maxlength="10" /><br><br>
                        
                        <label>Grau de Instrução</label>
                        <select name = "txtGenero">
                        <option value = "txtEducacaoInfantilIncompleto" >Educação infantil incompleta</option>
                        <option value = "txtEducacaoInfantil" >Educação infantil</option>
                        <option value = "txtFundamentalIncompleto"  >Fundamental incompleto</option>
                        <option value = "txtFundamental"  >Fundamental</option>
                        <option value = "txtEnsino MédioINcompleto" >Ensino médio incompleto</option>
                        <option value = "txtEnsino Médio"  >Ensino médio</option>
                        <option value = "txtSuperior"  >Superior(Graduação)</option>
                        <option value = "txtMestrado"  >Mestrado</option>
                        <option value = "txtNenhum" selected>Nenhum</option>
                        </select></br></br>

                        <label>Senha</label>
                        <input type="text" name="txtSenha" size="8" minlenght ="8" maxlength="70" /></br></br>

                        <input type="submit" value="CADASTRAR" />
                        </form>
                    </div>
                        
                    <div id=head-top> </div>


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
    </body>
</html>