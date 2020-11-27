@extends('layouts.template')

@section('title','Cadastro')

@section('style','/css/provaegabarito.css')

@section('content')


<div id=rettop>
</div>
<div id=retescolha>
    <div id=coluna1>
        <img class="escolhido" src="{{$universidade->logo}}">
    </div>
    <div id=coluna2>
        <div class="Fixo">
        <p>
            Provas e Gabaritos
        </p>
        </div>
        <div class="Universidades">
            <p>{{$universidade->name}}</p>
            <p>({{$universidade->initials}})</p>
            <p>Local: <span style="color: #aee08dff;">{{$universidade->local}}</span></p> 
        </div>
    </div>
</div>
<div class="container" id=retmenu>
    <img class="menu1" src="/img/menu1.png">
    <div class="textomenu"> 
        </p>2019</p>
    </div>
    <div class="textoprova"> 
        <p>Prova</p> 
        <p><a href="/img/USP2019p.pdf" download>Prova2019.pdf</a></p>
    </div>
    <div class="textogabarito"> 
        <p>Gabarito</p> 
        <p><a href="/img/USP2019g.pdf">Prova2019.pdf</a></p>
    </div>
    <img class="menu2" src="/img/menu1.png">
    <div class="textomenu2">
        <p>2018</p>
    </div>
    <div class="textoprova2"> 
        <p>Prova</p> 
        <p><a href="/img/USP2018p.pdf">Prova2018.pdf</a></p>
    </div>
    <div class="textogabarito2"> 
        <p>Gabarito</p> 
        <p><a href="/img/USP2019g.pdf" download="">Prova2018.pdf</a></p>
    </div>
</div>         

@endsection