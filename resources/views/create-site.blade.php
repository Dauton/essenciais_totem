@extends('layouts.admin-layout')
@section('content')
    <header class="contents-cabecalho">
        <h2>Sites</h2>
        <i class="fa-solid fa-industry"></i>
    </header>

    <section class="conteudo">

        <h2>Cadastrar um novo site</h2>

        <p class="alert-text">É obrigatório o cadastro de pelo menos uma ferramenta.</p>

        <form method="post" action="/createSite">
            @csrf
            <label for="site">
                <p>Qual o site?<span class="required-input"> *</span></p>
                <div>
                    <i class="fa-solid fa-industry"></i>
                    <input type="text" name="site" id="site" placeholder="Nome do site"
                        value="{{ old('site') }}">
                </div>
                @error('site')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>

            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 01</h2>
                </header>
                <label for="titulo_url01">
                    <p>Título URL 01<span class="required-input"> *</span></p>
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url01" id="titulo_url01" placeholder="Título da ferramenta 01"
                            value="{{ old('titulo_url01') }}">
                    </div>
                    @error('titulo_url01')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    <p>URL 01<span class="required-input"> *</span></p>
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url01" id="url01" placeholder="URL da ferramenta 01"
                            value="{{ old('url01') }}">
                    </div>
                    @error('url01')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>

            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 02</h2>
                </header>
                <label for="titulo_url02">
                    Título URL 02
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url02" id="titulo_url02" placeholder="Título da ferramenta 02"
                            value="{{ old('titulo_url02') }}">
                    </div>
                    @error('titulo_url02')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 02
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url02" id="url02" placeholder="URL da ferramenta 02"
                            value="{{ old('url02') }}">
                    </div>
                    @error('url02')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 03</h2>
                </header>
                <label for="titulo_url03">
                    Título URL 03
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url03" id="titulo_url03" placeholder="Título da ferramenta 03"
                            value="{{ old('titulo_url03') }}">
                    </div>
                    @error('titulo_url03')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 03
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url03" id="url03" placeholder="URL da ferramenta 03"
                            value="{{ old('url03') }}">
                    </div>
                    @error('url03')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 04</h2>
                </header>
                <label for="usuario">
                    Título URL 04
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url04" id="titulo_url04" placeholder="Título da ferramenta 04"
                            value="{{ old('titulo_url04') }}">
                    </div>
                    @error('titulo_url04')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 01
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url04" id="url04" placeholder="URL da ferramenta 04"
                            value="{{ old('url04') }}">
                    </div>
                    @error('url04')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 05</h2>
                </header>
                <label for="usuario">
                    Título URL 05
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url05" id="titulo_url05" placeholder="Título da ferramenta 05"
                            value="{{ old('titulo_url05') }}">
                    </div>
                    @error('titulo_url05')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 05
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url05" id="url05" placeholder="URL da ferramenta 05"
                            value="{{ old('url05') }}">
                    </div>
                    @error('url05')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 06</h2>
                </header>
                <label for="usuario">
                    Título URL 06
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url06" id="titulo_url06" placeholder="Título da ferramenta 06"
                            value="{{ old('titulo_url06') }}">
                    </div>
                    @error('titulo_url06')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 06
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url06" id="url06" placeholder="URL da ferramenta 06"
                            value="{{ old('url06') }}">
                    </div>
                    @error('url06')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 07</h2>
                </header>
                <label for="usuario">
                    Título URL 07
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url07" id="titulo_url07" placeholder="Título da ferramenta 07"
                            value="{{ old('titulo_url07') }}">
                    </div>
                    @error('titulo_url07')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 07
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url07" id="url07" placeholder="URL da ferramenta 07"
                            value="{{ old('url07') }}">
                    </div>
                    @error('url07')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 08</h2>
                </header>
                <label for="usuario">
                    Título URL 08
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url08" id="titulo_url08" placeholder="Título da ferramenta 08"
                            value="{{ old('titulo_url08') }}">
                    </div>
                    @error('titulo_url08')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 08
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url08" id="url08" placeholder="URL da ferramenta 08"
                            value="{{ old('url08') }}">
                    </div>
                    @error('url08')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 09</h2>
                </header>
                <label for="usuario">
                    Título URL 09
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url09" id="titulo_url09" placeholder="Título da ferramenta 09"
                            value="{{ old('titulo_url09') }}">
                    </div>
                    @error('titulo_url09')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 09
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url09" id="url09" placeholder="URL da ferramenta 09"
                            value="{{ old('url09') }}">
                    </div>
                    @error('url09')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 10</h2>
                </header>
                <label for="usuario">
                    Título URL 10
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url10" id="titulo_url10" placeholder="Título da ferramenta 10"
                            value="{{ old('titulo_url10') }}">
                    </div>
                    @error('titulo_url10')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 10
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url10" id="url10" placeholder="URL da ferramenta 10"
                            value="{{ old('url10') }}">
                    </div>
                    @error('url10')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 11</h2>
                </header>
                <label for="usuario">
                    Título URL 11
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url11" id="titulo_url11" placeholder="Título da ferramenta 11"
                            value="{{ old('titulo_url11') }}">
                    </div>
                    @error('titulo_url11')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 11
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url11" id="url11" placeholder="URL da ferramenta 11"
                            value="{{ old('url11') }}">
                    </div>
                    @error('url11')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 12</h2>
                </header>
                <label for="usuario">
                    Título URL 12
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url12" id="titulo_url12" placeholder="Título da ferramenta 12"
                            value="{{ old('titulo_url12') }}">
                    </div>
                    @error('titulo_url12')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 12
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url12" id="url12" placeholder="URL da ferramenta 12"
                            value="{{ old('url12') }}">
                    </div>
                    @error('url12')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>

            <div class="div-btns">
                <button type="submit">Submeter</button>
                <a href="/sites"><button type="button" id="btn-cancelar">Cancelar</button></a>
            </div>

        </form>

        @endsection

    </section>
