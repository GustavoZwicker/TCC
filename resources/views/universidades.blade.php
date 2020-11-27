@extends('layouts.template')

@section('title', 'universidades')

@section('style', '/css/universidades.css')

@section('content')


    <div id=espaco></div>
    <div class=row>

        @foreach ($universidade as $uni)
            <div class=col-sm-8>
                <div class=head-top> </div>
                <div class=retangulo>
                    <div class="univer">
                        {{ $uni->name }}
                        <p>({{ $uni->initials }})</p>
                        <p><br>Local: <span style="color: #ccccccff;">{{ $uni->local }}</span></p>
                        <p><a href="http://127.0.0.1:8000/provaegabarito/{{ $uni->initials }}">
                                <div class="maisinfo"> MAIS INFORMAÇÕES </div>
                            </a> </p>
                    </div>
                    <div class=img>
                        <img src="{{ $uni->logo }}" width=400px height=260px>
                    </div>
                </div>
            </div>
            <div class=col-sm-4>
                <input id="checkbox{{ $uni->id }}" type="checkbox" value="{{ $uni->id }}" class="css-checkbox">
                <label for="checkbox{{ $uni->id }}" class="css-label"></label>
            </div>
            <div class=head-top2> </div>
        @endforeach
    </div>


@endsection
