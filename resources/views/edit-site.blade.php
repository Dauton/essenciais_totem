@extends('layouts.admin-layout')
@section('content')

    <header class="contents-cabecalho">
        <h2>Sites</h2>
        <i class="fa-solid fa-industry"></i>
    </header>

    <section class="conteudo">

        <h2>Editar site</h2>

        <p class="alert-text">É obrigatório o preenchimento de pelo menos uma ferramenta.</p>

        @include('form-edit-site')

        @endsection

    </section>
