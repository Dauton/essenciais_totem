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
                <th>VISITAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>CDARCEX</td>
                <td>
                    <i class="fa-solid fa-square-pen" title="Editar unidade"></i>
                    <i class="fa-solid fa-square-xmark" title="Excluir unidade"></i>
                </td>
                <td><a href="/site" target="_blank"><i class="fa-solid fa-eye" title="Visitar unidade"></i></a></td>
            </tr>
            <tr>
                <td>CDAMBEX</td>
                <td>
                    <i class="fa-solid fa-square-pen" title="Editar unidade"></i>
                    <i class="fa-solid fa-square-xmark" title="Excluir unidade"></i>
                </td>
                <td><i class="fa-solid fa-eye" title="Visitar unidade"></i></td>
            </tr>
            <tr>
                <td>CDYPEEX</td>
                <td>
                    <i class="fa-solid fa-square-pen" title="Editar unidade"></i>
                    <i class="fa-solid fa-square-xmark" title="Excluir unidade"></i>
                </td>
                <td><i class="fa-solid fa-eye"title="Visitar unidade"></i></td>
            </tr>
        </tbody>
    </table>
</section>

@endsection
