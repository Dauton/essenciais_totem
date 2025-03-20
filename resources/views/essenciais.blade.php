@extends('layouts.essenciais-layout')
@section('essenciais')

<header class="contents-cabecalho">
    <h2>Sites</h2>
    <i class="fa-solid fa-industry"></i>
</header>

<section class="conteudo">

    <h2>Selecione sua operação</h2>

    <table>
        <thead>
            <tr>
                <th>UNIDADE</th>
                <th>VISUALIZAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sites as $site)
                <tr>
                    <td>{{ $site->site }}</td>
                    <td><a href="/site/{{$site->site}}"><i class="fa-solid fa-eye" title="Visitar unidade"></i></a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</section>

@endsection
