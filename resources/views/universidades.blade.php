@extends('layouts.template')

@section('title','universidades')

@section('style','/css/universidades.css')

@section('content')

                    
                    <div id =espaco></div>

                    @foreach ($universidade as $uni)
                    <div id=head-top> </div>
                    <div id=retangulo>
                    <div class="univer">
                    {{$uni->name}}<p>({{$uni->initials}})</p>
                    <p><br>Local: <span style="color: #ccccccff;">{{$uni->local}}</span></p>
                    <p><a href="http://127.0.0.1:8000/provaegabarito/{{$uni->initials}}"> <div class="maisinfo"> MAIS INFORMAÇÕES </div></a> </p>
                    </div>
                    
                    <div class=img>
                    <img src="{{$uni->logo}}" width=400px height=260px></div>
                    </div>
                    
                <input id="checkboxid" type="checkbox" value="{{$uni->id}}" class="css-checkbox">
                <label for="checkboxid" class="css-label"></label>
                    
                    <div id=head-top2> </div>
                    @endforeach
                
@endsection