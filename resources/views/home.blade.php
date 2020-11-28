@extends('layouts.template')

@section('title','Home')

@section('style','/css/home.css')

@section('content')
<?php $i=0?>
                <center>
                <div id="Tamanho_carrossel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="/img/img1.png" alt="First slide">                         
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/img2.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="/img/img3.png" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                </center>
                    <div id=colubg>
                    @if (Auth::check())
        
                    @foreach ($fav as $favorito)
                    @if($i < 3)
                        <div id=colu1>
                            <img class=coluimg src="/{{$universidade[$favorito->universidade_id-1]['logo']}}">
                        <h1>{{$universidade[$favorito->universidade_id-1]['name']}}</h1>
                            <h2><a href= "/universidade/{{$universidade[$favorito->universidade_id-1    ]['initials']}}"><br>Mais informações</a><h2>
                        </div>
                    <?php $i++;
                    unset($filtro['id'][($favorito->universidade_id)-1]); ?>
                    @endif
                    @endforeach
                    @endif
                    @while($i < 3)
                    <?php $id = array_rand($filtro['id']); $i++?>
                    <div id=colu1>
                        <img class=coluimg src="/{{$universidade[$id]['logo']}}">
                    <h1>{{$universidade[$id]['name']}}</h1>
                        <h2><a href= "/universidade/{{$universidade[$id]['initials']}}"><br>Mais informações</a><h2>
                    </div>
                    <?php unset($filtro['id'][$id]) ?>
                    @endwhile
                    
                    
                    </div>
                    
@endsection
