@extends('layouts.template')

@section('title','Cadastro')

@section('style','/css/provaegabarito.css')

@section('content')


<div id=rettop>
</div>
<div id=retescolha>
    <div id=coluna1>
        <img class="escolhido" src="/{{$universidade->logo}}">
    </div>
    <div id=coluna2>
        <div class="Fixo">
        
        </div>
        <div class="Universidades">
            <p>
                Provas e Gabaritos
            </p>
            <p>{{$universidade->name}}</p>
            <p>{{$universidade->initials}} &emsp;<a style="color: #aee08dff" href="{{$universidade->edict}}" download>Edital.pdf</a></p>
            <p>Estado: <span style="color: #aee08dff;">{{$universidade->local}}</span></p>
            
        </div>
    </div>
</div>
<div class="container" id=retmenu>
    @foreach ($p_data as $peg)
    <div class="ret2">
        <img class="menu" src="/img/menu1.png">
        <div class="textomenu"> 
            </p>{{$peg->year}}</p>
        </div>
        <div class="textoprova"> 
            <p>Prova</p> 
            <p><a href="/{{$peg->path}}" download>Prova.pdf</a></p>
        </div>
        <div class="textogabarito"> 
            <p>Gabarito</p> 
            <p><a href="{{$peg->feedback}}">Gabarito.pdf</a></p>
        </div>
    </div>
    @endforeach
</div>         

@endsection