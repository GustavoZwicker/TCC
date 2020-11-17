@extends('template')

@section('title','Home')

@section('stylesheet','/css/home.css')

@section('content')

<?php
$teste = DB::select('select uniNome from Universidade where uniId =1');?>
                    <div id=sliderbg>
                        <a class=prev> <img src="/img/seta.png"> </a>
                            <div id=slider>
                                <?php var_dump($teste)?>
                                <ul class=slider>
                                    <li>
                                        <input type="radio" id="slide1" name="slide" checked>
                                        <label for="slide1"></label>
                                        <img src="/img/img1.png" width=calc(100%/(1006/360))px height=360px>
                                    </li>
                                    <li>
                                        <input type="radio" id="slide2" name="slide">
                                        <label for="slide2"></label>
                                        <img src="/img/img2.png" width=calc(100%/(1024/360))px height=360px>
                                    </li>
                                    <li>
                                        <input type="radio" id="slide3" name="slide">
                                        <label for="slide3"></label>
                                        <img src="/img/img3.png" width=calc(100%/(1006/360))px height=360px>
                                    </li>
                                </ul>
                            </div>
                        <a class=next><img src="/img/seta.png"> </a>
                    </div>
                    <div id=row>
                        <div id=colu1>
                            <img class=coluimg src="/img/unesplogo.png">
                            <h1>Universidade Estadual <br>Paulista</    br></h1>
                            <h2><a href= "/welcome">Mais informações</a><h2>
                        </div>
                        <div id=colu2>
                            <img class=coluimg src="/img/unesplogo.png">
                            <h1>Universidade Estadual Paulista</h1>
                            <h2><a href= "/welcome">Mais informações</a><h2>
                        </div>
                        <div id=colu3>
                            <img class=coluimg src="/img/unesplogo.png">
                            <h1 class=shit>Universidade Estadual Paulista</h1>
                            <h2><a href= "/welcome">Mais informações</a><h2>
                        </div>
                    </div>
@endsection