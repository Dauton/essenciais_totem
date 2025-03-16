@extends('layouts.admin-layout')
@section('content')
    <header class="contents-cabecalho">
        <h2>Usuários</h2>
        <i class="fa-solid fa-industry"></i>
    </header>

    <section class="conteudo">

        <h2>Cadastrar um novo usuário</h2>

        <form method="post" action="/createUser" id="form-user-page">
            @csrf
            <header class="contents-cabecalho">
                <h2>Dados do usuário</h2>
            </header>
            <label for="nome_usuario">
            <p>Nome completo<span class="required-input"> *</span></p>
                <div>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="nome_usuario" id="nome_usuario" placeholder="Nome completo do usuário"
                        value="{{ old('nome_usuario') }}">
                </div>
                @error('nome_usuario')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>

            <label for="usuario">
                <p>Usuário de acesso<span class="required-input"> *</span></p>
                <div>
                    <i class="fa-solid fa-user-tag"></i>
                    <input type="text" name="usuario" id="usuario" placeholder="Usuário de acesso"
                        value="{{ old('usuario') }}">
                </div>
                @error('usuario')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>

            <label for="site">
                <p>Site<span class="required-input"> *</span></p>
                <div>
                    <i class="fa-solid fa-building-user"></i>
                    <select id="site" name="site">
                        <option value="">Selecione o site</option>
                        <option value="CDARCEX">CDARCEX</option>
                        <option value="CDAMBEX">CDAMBEX</option>
                        <option value="CDNIVEX">CDNIVEX</option>
                    </select>
                </div>
                @error('site_usuario')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>
        </label>

        <label for="perfil">
            <p>Perfil<span class="required-input"> *</span></p>
            <div>
                <i class="fa-solid fa-user-shield"></i>
                <select id="perfil" name="perfil">
                    <option value="">Selecione o perfil</option>
                    <option value="TI SITES">TI SITES</option>
                    <option value="ADMIN">ADMIN</option>
                </select>
            </div>
            @error('perfil')
                <p class="msg-input-erro">{{ $message }}</p>
            @enderror
        </label>

            <label for="senha">
                <p>Senha<span class="required-input"> *</span></p>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" name="senha" id="senha" placeholder="Senha de acesso"
                        value="{{ old('senha') }}">
                </div>
                @error('senha')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>

            <label for="repete_senha">
                <p>Repita a senha<span class="required-input"> *</span></p>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="text" name="repete_senha" id="repete_senha" placeholder="Repita a senha de acesso"
                        value="{{ old('repete_senha') }}">
                </div>
                @error('repete_senha')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>

            <div class="div-btns">
                <button type="submit">Submeter</button>
                <a href="/users"><button type="button" id="btn-cancelar">Cancelar</button></a>
            </div>

        </form>

    </section>

@endsection
