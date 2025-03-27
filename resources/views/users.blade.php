@extends('layouts.admin-layout')
@section('content')

<header class="contents-cabecalho">
    <h2>Usuários</h2>
    <i class="fa-solid fa-users-gear"></i>
</header>

<section class="conteudo">

    <h2>Gerenciamento de usuários cadastrados</h2>

    <a href="/create-user"><button>Cadastrar novo</button></a><br>

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
            @foreach ($users as $user)
            <tr>
                <td>{{$user->nome_usuario}}</td>
                <td>{{$user->usuario}}</td>
                <td>{{$user->site_usuario}}</td>
                <td>
                    <a href="/editUser/{{Crypt::encrypt($user->id)}}"><i class="fa-solid fa-square-pen" title="Editar usuário"></i></a>
                    <a href="/deleteUser/{{Crypt::encrypt($user->id)}}"><i class="fa-solid fa-square-xmark" title="Excluir usuário"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</section>

@endsection
