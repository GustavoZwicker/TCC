@extends('layouts.template')

@section('title','Home')

@section('style','/css/redacoes.css')

@section('content')

            <div id = content>
                <div id=retangulo>
                    <h1>REDAÇÕES</h1>
                </div>

                <h2>ENEM</h2>
                <div id = quadrado1> 
                    <img src="/img/red_enem_pequena.png" alt="">
                </div>

                <h4>FUVEST</h4>
                <div id = quadrado3>
                    <img src="/img/red_fuvest_pequena.png" alt="">
                </div>
                    
                <h3>UNICAMP</h3>
                <div id = quadrado2>
                    <img src="/img/red_unicamp_pequena.png" alt="">
                </div>

                <h5>PUC-RJ</h5>
                <div id = quadrado4>
                    <img src="/img/red_puc_pequena.png" alt="">
                </div>
            </div>
@endsection