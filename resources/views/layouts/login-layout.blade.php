@extends('layouts.head-layout')
@section('head')


<link rel='stylesheet' type="text/css" href="{{ asset('assets/css/login.css') }}">

<body>
    <main class="principal">
        <section class="center">
            @yield('login')
        </section>

    </main>

    <footer class="rodape">
        <p> &copy; {{date('Y')}} - ID DO BRASIL LOGÍSTICA LTDA.</p>
    </footer>

</body>

</html>
@endsection
