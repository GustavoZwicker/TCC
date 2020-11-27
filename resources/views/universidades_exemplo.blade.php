@extends('layouts.template')

@section('title', 'universidades')

@section('style', '/css/universidades.css')

@section('content')

    <div class="container">
        @foreach ($universidade as $uni)
            <div class="row">
                <div class="col-sm">
                    <figure>
                    </figure>
                </div>
                <div class="row-sm">
                    {{ $uni->name }}
                    <p>({{ $uni->initials }})</p>
                    <p><br>Local: <span style="color: #ccccccff;">{{ $uni->local }}</span></p>
                    <p><a href="http://127.0.0.1:8000/provaegabarito/{{ $uni->initials }}">
                            <div class="maisinfo"> MAIS INFORMAÇÕES </div>
                        </a> </p>
                </div>
                <div class="col-sm">
                    <input id="checkboxid" type="checkbox" value="{{ $uni->id }}" class="css-checkbox">
                </div>
            </div>
        @endforeach
    </div>

@endsection
