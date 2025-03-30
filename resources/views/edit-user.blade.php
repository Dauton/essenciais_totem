@extends('layouts.admin-layout')
@section('content')

<header class="contents-cabecalho">
    <h2>Usuários</h2>
    <i class="fa-solid fa-industry"></i>
</header>

<section class="conteudo">

    <h2>Editar usuário</h2>

    <form method="post" action="/editUser/{{ $visualizer->id }}" id="form-user-page">
        @csrf
        <header class="contents-cabecalho">
            <h2>Dados do usuário</h2>
        </header>
        <label for="nome_usuario">
            <p>Nome completo<span class="required-input"> *</span></p>
            <div>
                <i class="fa-solid fa-user"></i>
                <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Nome completo do usuário"
                    value="{{ $visualizer->nome_usuario }}">
            </div>
            @error('nome_usuario')
                <p class="msg-input-erro">{{ $message }}</p>
                <style>
                    #nome_usuario {
                        border: 1px solid red;
                    }
                </style>
            @enderror
        </label>

        <label for="usuario">
            <p>Usuário de acesso<span class="required-input"> *</span></p>
            <div>
                <i class="fa-solid fa-user-tag"></i>
                <input type="text" name="usuario" id="usuario" placeholder="Usuário de acesso"
                    value="{{ $visualizer->usuario }}">
            </div>
            @error('usuario')
                <p class="msg-input-erro">{{ $message }}</p>
                <style>
                    #usuario {
                        border: 1px solid red;
                    }
                </style>
            @enderror
        </label>

        <label for="site_usuario">
            <p>Site<span class="required-input"> *</span></p>
            <div>
                <i class="fa-solid fa-building-user"></i>
                <select id="site_usuario" name="site_usuario">
                    <option value="{{ $visualizer->site_usuario }}">{{ $visualizer->site_usuario }}</option>
                    <option value="CDARCEX" {{ old('site_usuario') == 'CDARCEX' ? 'selected' : '' }}>CDARCEX</option>
                    <option value="CDAMBEX" {{ old('site_usuario') == 'CDAMBEX' ? 'selected' : '' }}>CDAMBEX</option>
                    <option value="CDNIVEX" {{ old('site_usuario') == 'CDNIVEX' ? 'selected' : '' }}>CDNIVEX</option>
                </select>
            </div>
            @error('site_usuario')
                <p class="msg-input-erro">{{ $message }}</p>
                <style>
                    #site_usuario {
                        border: 1px solid red;
                    }
                </style>
            @enderror
        </label>

        <label for="perfil">
            <p>Perfil<span class="required-input"> *</span></p>
            <div>
                <i class="fa-solid fa-user-shield"></i>
                <select name="perfil">
                    <option value="{{ $visualizer->perfil }}">{{ $visualizer->perfil }}</option>
                    <option value="TI SITES" {{ old('perfil') == 'TI SITES' ? 'selected' : '' }}>TI SITES</option>
                    <option value="ADMIN" {{ old('perfil') == 'ADMIN' ? 'selected' : '' }}>ADMIN</option>
                </select>
            </div>
            @error('perfil')
                <p class="msg-input-erro">{{ $message }}</p>
                <style>
                    #perfil {
                        border: 1px solid red;
                    }
                </style>
            @enderror
        </label>

        <input type="hidden" name="id" value="{{ $visualizer->id }}">

        <div class="div-btns">
            <button type="submit">Submeter</button>
            <a href="/users"><button type="button" id="btn-cancelar">Cancelar</button></a>
        </div>

    </form>

</section>

<div class="floating-buttons">
    <a href="/update-password/{{Crypt::encrypt($visualizer->id)}}">
        <button type="button" title="Resetar a senha">
            <i class="fa-solid fa-key"></i>
        </button>
    </a>
</div>

@endsection
