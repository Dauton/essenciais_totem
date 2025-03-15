@extends('layouts.login-layout')
@section('login')

<form action="/loginSubmit" method="post" id="form-login">
    @csrf
    <img src="{{ asset('assets/img/id-logo-extenso.png') }}" alt="logo-idl">

    <label for="usuario">Usuário
        <div>
            <i class="fa-solid fa-user"></i>
            <input type="text" name="usuario" placeholder="Usuário" value="{{ old('usuario') }}">
        </div>
        @error('usuario')
            <p class="msg-input-erro">{{ $message }}</p>
        @enderror
    </label>

    <label for="senha">Senha
        <div>
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="senha" placeholder="Senha" value="{{ old('senha') }}">
        </div>
        @error('senha')
            <p class="msg-input-erro">{{ $message }}</p>
        @enderror
    </label>

    <div class="div-btns">
        <button type="submit">Acessar</button>
    </div>

    @if(session('loginError'))
        <p class="login-error">{{ session('loginError') }}</p>
    @endif
</form>

@endsection
