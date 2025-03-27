@extends('layouts.admin-layout')
@section('content')

<header class="contents-cabecalho">
    <h2>Home</h2>
    <i class="fa-solid fa-house"></i>
</header>

<section class="conteudo">

    <h2>Meu site</h2>

    @if($site === null)
    <p>Site não cadastrado</p>
    @else
    <form method="post" action="/createSite">
        @csrf

        <div class="box-form" id="box-form-first">
            <header class="contents-cabecalho">
                <h2>Descrição do Site</h2>
            </header>
            <label for="site">
                <p>Site</p>
                <div>
                    <i class="fa-solid fa-industry"></i>
                    <input type="text" name="site" id="site" placeholder="Nome do site"
                        value="{{ $site->site }}" readonly  >
                </div>
                @error('site')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>
        </div>

        <div class="box-form">
            <header class="contents-cabecalho">
                <h2>Ferramenta 01</h2>
            </header>
            <label for="titulo_url1">
                <p>Título URL 01
                <div>
                    <i class="fa-solid fa-file-pen"></i>
                    <input type="text" name="titulo_url1" id="titulo_url1" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url1 }}" readonly>
                </div>
                @error('titulo_url01')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                <p>URL 01
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url01" id="url01" placeholder="Nenhum registro"
                        value="{{ $site->url1 }}" readonly>
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
                    <input type="text" name="titulo_url02" id="titulo_url02" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url2 }}" readonly>
                </div>
                @error('titulo_url02')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 02
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url02" id="url02" placeholder="Nenhum registro"
                        value="{{ $site->url2 }}" readonly>
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
                    <input type="text" name="titulo_url03" id="titulo_url03" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url3 }}" readonly>
                </div>
                @error('titulo_url03')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 03
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url03" id="url03" placeholder="Nenhum registro"
                        value="{{ $site->url3 }}" readonly>
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
                    <input type="text" name="titulo_url04" id="titulo_url04" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url4 }}" readonly>
                </div>
                @error('titulo_url04')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 01
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url04" id="url04" placeholder="Nenhum registro"
                        value="{{ $site->url4 }}" readonly>
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
                    <input type="text" name="titulo_url05" id="titulo_url05" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url5 }}" readonly>
                </div>
                @error('titulo_url05')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 05
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url05" id="url05" placeholder="Nenhum registro"
                        value="{{ $site->url5 }}" readonly>
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
                    <input type="text" name="titulo_url06" id="titulo_url06" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url6 }}" readonly>
                </div>
                @error('titulo_url06')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 06
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url06" id="url06" placeholder="Nenhum registro"
                        value="{{ $site->url6 }}" readonly>
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
                    <input type="text" name="titulo_url07" id="titulo_url07" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url7 }}" readonly>
                </div>
                @error('titulo_url07')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 07
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url07" id="url07" placeholder="Nenhum registro"
                        value="{{ $site->url7 }}" readonly>
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
                    <input type="text" name="titulo_url08" id="titulo_url08" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url8 }}" readonly>
                </div>
                @error('titulo_url08')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 08
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url08" id="url08" placeholder="Nenhum registro"
                        value="{{ $site->url8 }}" readonly>
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
                    <input type="text" name="titulo_url09" id="titulo_url09" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url9 }}" readonly>
                </div>
                @error('titulo_url09')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 09
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url09" id="url09" placeholder="Nenhum registro"
                        value="{{ $site->url9 }}" readonly>
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
                    <input type="text" name="titulo_url10" id="titulo_url10" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url10 }}" readonly>
                </div>
                @error('titulo_url10')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 10
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url10" id="url10" placeholder="Nenhum registro"
                        value="{{ $site->url10 }}" readonly>
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
                    <input type="text" name="titulo_url11" id="titulo_url11" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url11 }}" readonly>
                </div>
                @error('titulo_url11')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 11
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url11" id="url11" placeholder="Nenhum registro"
                        value="{{ $site->url11 }}" readonly>
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
                    <input type="text" name="titulo_url12" id="titulo_url12" placeholder="Nenhum registro"
                        value="{{ $site->titulo_url12 }}" readonly>
                </div>
                @error('titulo_url12')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
                URL 12
                <div>
                    <i class="fa-solid fa-link"></i>
                    <input type="text" name="url12" id="url12" placeholder="Nenhum registro"
                        value="{{ $site->url12 }}" readonly>
                </div>
                @error('url12')
                    <p class="msg-input-erro">{{ $message }}</p>
                @enderror
            </label>
        </div>

    </form>
    @endif

</section>

@endsection
