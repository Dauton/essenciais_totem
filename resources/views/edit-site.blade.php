@extends('layouts.admin-layout')
@section('content')

    <header class="contents-cabecalho">
        <h2>Sites</h2>
        <i class="fa-solid fa-industry"></i>
    </header>

    <section class="conteudo">

        <h2>Editar site</h2>

        <p class="alert-text">É obrigatório o preenchimento de pelo menos uma ferramenta.</p>

        <form method="post" action="/editSite">
            @csrf

            <div class="box-form" id="box-form-first">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 1</h2>
                </header>
                <label for="site">
                    <p>Qual o site?<span class="required-input"> *</span></p>
                    <div>
                        <i class="fa-solid fa-industry"></i>
                        <input type="text" name="site" id="site" placeholder="Ex: CDARCEX"
                            value="{{ $visualizer->site }}">
                    </div>
                    @error('site')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>

            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 1</h2>
                </header>
                <label for="titulo_url1">
                    <p>Título URL 1<span class="required-input"> *</span></p>
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url1" id="titulo_url1" placeholder="Título da ferramenta 1"
                            value="{{ $visualizer->titulo_url1 }}">
                    </div>
                    @error('titulo_url1')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    <p>URL 1<span class="required-input"> *</span></p>
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url1" id="url1" placeholder="URL da ferramenta 1"
                            value="{{ $visualizer->url1 }}">
                    </div>
                    @error('url1')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>

            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 2</h2>
                </header>
                <label for="titulo_url2">
                    Título URL 2
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url2" id="titulo_url2" placeholder="Título da ferramenta 2"
                            value="{{ $visualizer->titulo_url2 }}">
                    </div>
                    @error('titulo_url2')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 2
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url2" id="url2" placeholder="URL da ferramenta 2"
                            value="{{ $visualizer->url2 }}">
                    </div>
                    @error('url2')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 3</h2>
                </header>
                <label for="titulo_url3">
                    Título URL 3
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url3" id="titulo_url3" placeholder="Título da ferramenta 3"
                            value="{{ $visualizer->titulo_url3 }}">
                    </div>
                    @error('titulo_url3')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 3
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url3" id="url3" placeholder="URL da ferramenta 3"
                            value="{{ $visualizer->url3 }}">
                    </div>
                    @error('url3')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 4</h2>
                </header>
                <label>
                    Título URL 4
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url4" id="titulo_url4" placeholder="Título da ferramenta 4"
                            value="{{ $visualizer->titulo_url4 }}">
                    </div>
                    @error('titulo_url4')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 1
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url4" id="url4" placeholder="URL da ferramenta 4"
                            value="{{ $visualizer->url4 }}">
                    </div>
                    @error('url4')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 5</h2>
                </header>
                <label>
                    Título URL 5
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url5" id="titulo_url5" placeholder="Título da ferramenta 5"
                            value="{{ $visualizer->titulo_url5 }}">
                    </div>
                    @error('titulo_url5')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 5
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url5" id="url5" placeholder="URL da ferramenta 5"
                            value="{{ $visualizer->url5 }}">
                    </div>
                    @error('url5')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 6</h2>
                </header>
                <label>
                    Título URL 6
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url6" id="titulo_url6" placeholder="Título da ferramenta 6"
                            value="{{ $visualizer->titulo_url6 }}">
                    </div>
                    @error('titulo_url6')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 6
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url6" id="url6" placeholder="URL da ferramenta 6"
                            value="{{ $visualizer->url6 }}">
                    </div>
                    @error('url6')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 7</h2>
                </header>
                <label>
                    Título URL 7
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url7" id="titulo_url7" placeholder="Título da ferramenta 7"
                            value="{{ $visualizer->titulo_url7 }}">
                    </div>
                    @error('titulo_url7')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 7
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url7" id="url7" placeholder="URL da ferramenta 7"
                            value="{{ $visualizer->url7 }}">
                    </div>
                    @error('url7')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 8</h2>
                </header>
                <label>
                    Título URL 8
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url8" id="titulo_url8" placeholder="Título da ferramenta 8"
                            value="{{ old('titulo_url8') }}">
                    </div>
                    @error('titulo_url8')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 8
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url8" id="url8" placeholder="URL da ferramenta 8"
                            value="{{ $visualizer->url8 }}">
                    </div>
                    @error('url8')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 9</h2>
                </header>
                <label>
                    Título URL 9
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url9" id="titulo_url9" placeholder="Título da ferramenta 9"
                            value="{{ $visualizer->titulo_url9 }}">
                    </div>
                    @error('titulo_url9')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 9
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url9" id="url9" placeholder="URL da ferramenta 9"
                            value="{{ $visualizer->url9 }}">
                    </div>
                    @error('url9')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>
            <div class="box-form">
                <header class="contents-cabecalho">
                    <h2>Ferramenta 10</h2>
                </header>
                <label>
                    Título URL 10
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url10" id="titulo_url10" placeholder="Título da ferramenta 10"
                            value="{{ $visualizer->url9 }}">
                    </div>
                    @error('titulo_url10')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 1
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url10" id="url10" placeholder="URL da ferramenta 10"
                            value="{{ $visualizer->url10 }}">
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
                <label>
                    Título URL 11
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url11" id="titulo_url11" placeholder="Título da ferramenta 11"
                            value="{{ $visualizer->titulo_url11 }}">
                    </div>
                    @error('titulo_url11')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 11
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url11" id="url11" placeholder="URL da ferramenta 11"
                            value="{{ $visualizer->url11 }}">
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
                <label>
                    Título URL 12
                    <div>
                        <i class="fa-solid fa-file-pen"></i>
                        <input type="text" name="titulo_url12" id="titulo_url12" placeholder="Título da ferramenta 12"
                            value="{{ $visualizer->titulo_url12 }}">
                    </div>
                    @error('titulo_url12')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                    URL 12
                    <div>
                        <i class="fa-solid fa-link"></i>
                        <input type="text" name="url12" id="url12" placeholder="URL da ferramenta 12"
                            value="{{ $visualizer->url12 }}">
                    </div>
                    @error('url12')
                        <p class="msg-input-erro">{{ $message }}</p>
                    @enderror
                </label>
            </div>

            <input type="hidden" name="id" value="{{ $visualizer->id }}">

            <div class="div-btns">
                <button type="submit">Submeter</button>
                <a href="/sites"><button type="button" id="btn-cancelar">Cancelar</button></a>
            </div>

        </form>

        @endsection

    </section>
