@extends('layouts.template')

@section('title','Cadastro')

@section('style','/css/cadastro.css')

@section('content')

                    <div id=head-top> </div>
                    <div>
                    <div id=retangulo>
                    <h1> CADASTRO </h1>
                
                    <form action="cadastro" method="POST">
                    @csrf
                    <div class="categorias">
                        <label>Nome</label>
                        <input type="text" name="name" size="70" maxlength="30" /><br>

                        <label>E-mail</label>
                        <input type="text" name="email" size="70" maxlength="30" /><br>

                        <label>Gênero</label>
                        
                        <select name ="genero">
                            <option value ="1">Masculino</option>
                            <option value ="2">Feminino</option>
                            <option value ="3">Outro</option>
                        </select></br>

                        <label>Data de Nascimento</label>
                        <input type="date" name="data_de_nasc" size="50" maxlength="10" /><br>

                        <label>Senha</label>
                        <input type="password" name="password" size="8" minlenght ="8" maxlength="70" /></br>
                        <center>
                        <input type="submit" value="CADASTRAR"/>
                        </center>
                        </form>
                    </div>
                        </form>
                    <div id=head-top> </div>

@endsection