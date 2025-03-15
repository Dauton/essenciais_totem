@extends('layouts.admin-layout')
@section('content')

<header class="contents-cabecalho">
    <h2>Usuários</h2>
    <i class="fa-solid fa-users"></i>
</header>

<section class="conteudo">

    <h2>Gerenciamento de usuários cadastrados</h2>

    <a href="/create-user"><button>Cadastrar novo</button></a>
    <br>
    <br>

    <table>
        <thead>
            <tr>
                <th>NOME</th>
                <th>USUÁRIO</th>
                <th>SITE</th>
                <th>GERENCIAR</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>DAUTON PEREIRA FÉLIX</td>
                <td>DPFELIX</td>
                <td>CDARCEX</td>
                <td>
                    <i class="fa-solid fa-square-pen" title="Editar usuário"></i>
                    <i class="fa-solid fa-square-xmark" title="Excluir usuário"></i>
                </td>
            </tr>
        </tbody>
    </table>
</section>

@endsection
