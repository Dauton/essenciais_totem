@extends('layouts.admin-layout')
@section('content')

<header class="contents-cabecalho">
    <h2>Usuários</h2>
    <i class="fa-solid fa-industry"></i>
</header>

<section class="conteudo">

    <h2>Resetar senha</h2>


    <form method="post" action="/updatePassword/{{ $visualizer->id }}" id="form-user-page">
        @csrf

        <header class="contents-cabecalho">
            <h2>Senha do usuário</h2>
        </header>

        <label for="senha">
            <p>Senha<span class="required-input"> *</span></p>
            <div>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="senha" id="senha" placeholder="Repita a senha de acesso" value="">
            </div>
            @error('senha')
                <p class="msg-input-erro">{{ $message }}</p>
                <style>
                    #senha {
                        border: 1px solid red;
                    }
                </style>
            @enderror
        </label>

        <label for="repete_senha">
            <p>Repita a senha<span class="required-input"> *</span></p>
            <div>
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="repete_senha" id="repete_senha" placeholder="Repita a senha de acesso">
            </div>
            @error('repete_senha')
                <p class="msg-input-erro">{{ $message }}</p>
                <style>
                    #repete_senha {
                        border: 1px solid red;
                    }
                </style>
            @enderror
        </label>

        <div class="div-btns">
            <button type="submit">Submeter</button>
            <a href="/users"><button type="button" id="btn-cancelar">Cancelar</button></a>
        </div>

    </form>

</section>

@endsection
