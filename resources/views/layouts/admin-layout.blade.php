@include('layouts.head-layout')

<body>

    <main class="principal">

        <nav class="menu-lateral">

            <a href="{{ route('home') }}">
                <img src="{{asset("assets/img/id-logo-branco-extenso.png")}}" alt="Logo" class="menu-lateral-logo">
            </a>

            <ul>
                <li><a href="{{ route("home") }}"><i class="fa-solid fa-house-chimney"></i>Home<i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="{{ route("sites") }}"><i class="fa-solid fa-industry"></i>Sites<i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="{{ route("users") }}"><i class="fa-solid fa-users"></i>Usuários<i class="fa-solid fa-angle-right"></i></a></li>
                <li><a href="/reset-password/{{ Crypt::encrypt(session('user.id')) }}"><i class="fa-solid fa-users"></i>Minha senha<i class="fa-solid fa-angle-right"></i></a></li>
            </ul>

            <footer class="menu-lateral-rodape">
                <i class="fa-solid fa-circle-user"></i>
                <div>
                    <h4>Bem-vindo(a)!</h4>
                    <p>{{session('user.nome_usuario')}}</p>
                    <p>{{session('user.site_usuario')}} - {{session('user.perfil')}}</p>

                </div>
            </footer>

            <ul>
                <li><a href="{{route('logout')}}"><i class="fa-solid fa-door-open"></i>Sair<i class="fa-solid fa-angle-right"></i></a></li>
            </ul>

        </nav>
        <section class="centro">

            @yield('content')
            @include('footer')

        </section>

    </main>

    @if (session('alertError'))
        <p class="alert-error">{{session('alertError')}}</p>
    @endif

    @if(session('alertSuccess'))
        <p class="alert-success">{{ session('alertSuccess') }}</p>
    @endif

    @if(session('alertInfo'))
        <p class="alert-info">{{ session('alertInfo') }}</p>
    @endif

</body>

</html>
