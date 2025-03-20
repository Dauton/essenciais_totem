@extends('layouts.essenciais-layout')
@section('essenciais')
    <header class="contents-cabecalho">
        <h2>Totem essenciais</h2>
        <i class="fa-solid fa-tablet-screen-button"></i>
    </header>

    <section class="conteudo">

        <article class="links-container">
            <header class="contents-cabecalho">
                <h2>{{ $visualizer->site }}</h2>
            </header>

            <div class="links-boxs">

                @if(!empty($visualizer->url1) && !empty($visualizer->titulo_url1))
                <a href="{{ $visualizer->url1 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url1 }}</p>
                    </div>
                </a>

                @endif
                @if(!empty($visualizer->url2) && !empty($visualizer->titulo_url2))

                <a href="{{ $visualizer->url2 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url2 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url3) && !empty($visualizer->titulo_url3))

                <a href="{{ $visualizer->url3 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url3 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url4) && !empty($visualizer->titulo_url4))

                <a href="{{ $visualizer->url4 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url4 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url5) && !empty($visualizer->titulo_url5))

                <a href="{{ $visualizer->url5 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url5 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url6) && !empty($visualizer->titulo_url6))

                <a href="{{ $visualizer->url6 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url6 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url7) && !empty($visualizer->titulo_url7))

                <a href="{{ $visualizer->url7 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url7 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url8) && !empty($visualizer->titulo_url8))

                <a href="{{ $visualizer->url8 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url8 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url9) && !empty($visualizer->titulo_url9))

                <a href="{{ $visualizer->url9 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url9 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url10) && !empty($visualizer->titulo_url10))

                <a href="{{ $visualizer->url10 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url10 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url11) && !empty($visualizer->titulo_url11))

                <a href="{{ $visualizer->url11 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url11 }}</p>
                    </div>
                </a>

                @endif
                @if (!empty($visualizer->url12) && !empty($visualizer->titulo_url12))

                <a href="{{ $visualizer->url12 }}" target="_blank">
                    <div class="link-box">
                        <i class="fa-solid fa-link"></i>
                        <p>{{ $visualizer->titulo_url12 }}</p>
                    </div>
                </a>
                @endif

            </div>

        </article>

    </section>

    <div class="floating-buttons">
        <a href="/">
            <button type="button" title="Alterar site">
                <i class="fa-solid fa-rotate-right"></i>
            </button>
        </a>
    </div>
@endsection
