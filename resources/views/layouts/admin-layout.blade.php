@extends('layouts.head-layout')
@section('head')

<body>
    <main class="principal">

        <nav class="menu-lateral">

            <img src="{{asset("assets/img/id-logo-branco-extenso.png")}}" alt="Logo" class="menu-lateral-logo">

            <ul>
                <li><a href="{{ asset("/home") }}"><i class="fa-solid fa-house-chimney"></i>Home<i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="{{ asset("/sites") }}"><i class="fa-solid fa-industry"></i>Sites<i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="{{ asset("/users") }}"><i class="fa-solid fa-users"></i>Usuários<i class="fa-solid fa-angle-right"></i></a></li>
            </ul>

            <footer class="menu-lateral-rodape">
                <i class="fa-solid fa-circle-user"></i>
                <div>
                    <h4>Bem-vindo(a)!</h4>
                    <p>{{session('user.nome_usuario')}}</p>
                    <p>{{session('user.site_usuario')}}</p>
                </div>
            </footer>

            <ul>
                <li><a href="/logout"><i class="fa-solid fa-door-open"></i>Sair<i class="fa-solid fa-angle-right"></i></a></li>
            </ul>

        </nav>

        <section class="centro">

            @yield('content')

            <footer class="rodape">
                <p> &copy; {{date('Y')}} - ID DO BRASIL LOGÍSTICA LTDA.</p>
            </footer>

        </section>

    </main>

</body>

</html>

@endsection
