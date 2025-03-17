@extends('layouts.admin-layout')
@section('content')

<header class="contents-cabecalho">
    <h2>Sites</h2>
    <i class="fa-solid fa-industry"></i>
</header>

<section class="conteudo">

    <h2>Gerenciamento de sites cadastrados</h2>

    <a href="/create-site"><button>Cadastrar novo</button></a>
    <br>
    <br>

    <table>
        <thead>
            <tr>
                <th>UNIDADE</th>
                <th>GERENCIAR</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sites as $site)

                <tr>
                    <td>{{ $site->site }}</td>
                    <td>
                        <i class="fa-solid fa-square-pen" title="Editar unidade"></i>
                        <i class="fa-solid fa-square-xmark" title="Excluir unidade"></i>
                        <a href="/site" target="_blank"><i class="fa-solid fa-eye" title="Visitar unidade"></i></a>
                    </td>
                </tr>

            @endforeach
        </tbody>
    </table>

</section>

@endsection
