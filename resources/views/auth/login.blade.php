@extends('layouts.template')

@section('title','Login?')

@section('style','/css/login.css')

@section('content')
    <div id=head-top> </div>
            <div id=retangulo> 
                <h1>LOGIN</h1>
                    <div class="esquerda">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="categorias">
                            </br>
                            <label>E-mail</label>
                                <input id="text" type="email" size="70" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus></br></br>

                                @error('email')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <label>Senha</label>


                                <input id="text" type="password" size="70" @error('password') is-invalid @enderror name="password" required autocomplete="current-password"></br></br>

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Lembre de mim') }}
                                    </label>
                                    <div class="col-sm">
                                        <a class="cadastrese" href="/cadastro">Não tem uma conta? Cadastre-se </a>
                                        </div>
                            <div class="col-sm">
                                <button class="botao" type="submit" value="LOGIN">
                                    {{ __(' Login ') }}
                                </button>
                        </div><div class="rpass">             
                                @if (Route::has('password.request'))
                                    <a class="esqueceu" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a> </div>
                                @endif
                            </div>
                            </div>
                        </div>
                        </div>
                    </form>
                </div>
@endsection