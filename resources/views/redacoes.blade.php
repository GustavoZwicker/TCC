@extends('layouts.template')

@section('title','Home')

@section('style','/css/redacoes.css')

@section('content')

            <div id = content>
                <div id=retangulo>
                    <h1>REDAÇÕES</h1>
                </div>
            <div class="row">
                <div class="col-sm-6">
                <h2>ENEM</h2>
                <div id = quadrado1>
                    <a href="http://127.0.0.1:8000/redacao_enem">
                    <img src="/img/red_enem_pequena.png">
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <h4>FUVEST</h4>
                <div id = quadrado3>
                    <a href="http://127.0.0.1:8000/redacao_fuv">
                    <img src="/img/red_fuvest_pequena.png">
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <h3>UNICAMP</h3>
                <div id = quadrado2>
                    <a href="http://127.0.0.1:8000/redacao_unicamp">
                    <img src="/img/red_unicamp_pequena.png">
                    </a>
                </div>
            </div>
            <div class="col-sm-6">
                <h5>PUC-RJ</h5>
                <div id = quadrado4>
                    <a href="http://127.0.0.1:8000/redacao_puc">
                    <img src="/img/red_puc_pequena.png">
                    </a>
                </div>
            </div>
            </div>
        </div>
@endsection