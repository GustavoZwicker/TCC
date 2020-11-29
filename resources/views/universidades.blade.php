@extends('layouts.template')

@section('title', 'universidades')

@section('style', '/css/universidades.css')

@section('content')

    <div id=espaco></div>
    <div class=row>
        <div class=erro>{{$error ?? ''}} </div>
        @foreach ($universidade as $uni)
            <div class=col-sm-8>
                <div class=head-top> </div>
                <div class=retangulo>
                    <div class="univer">
                        {{ $uni->name }}
                        <p>({{ $uni->initials }})</p>
                        <p><br>Local: <span style="color: #ccccccff;">{{ $uni->local }}</span></p>
                        <p><a href="http://127.0.0.1:8000/provaegabarito/{{ $uni->id }}">
                                <div class="maisinfo"> MAIS INFORMAÇÕES </div>
                            </a> </p>
                    </div>
                    <div class=img>
                        <img src="{{ $uni->logo }}" width=400px height=260px>
                    </div>
                </div>
                <div class=head-top> </div>
            </div>
            @if (Auth::check())
                <div class=col-sm-4>
                    <form name='teste' method="POST" action=@if (empty($favorito['universidade_id'] == true) || in_array($uni->id, $favorito['universidade_id']) == false)
                        'favoritado'
                    @else
                        'desfavoritado'
            @endif>
            @csrf
            <input value="{{ $uni->id }}" type="hidden" name='universidade_id'>
            <input value="{{ $user->id }}" type="hidden" name='user_id'>
            <input id="checkbox{{ $uni->id }}" type="submit" class="css-checkbox" value="submit">
            <label for="checkbox{{ $uni->id }}" class="css-label" @if (empty($favorito['universidade_id'] == true) || in_array($uni->id, $favorito['universidade_id']) == false)
                style="opacity: 50%"
            @else
                style="opacity: 100%"
        @endif>
        </label>
        </form>
    </div>
    @endif
    @endforeach
    </div>
    <div class=head-top> </div>
@endsection
