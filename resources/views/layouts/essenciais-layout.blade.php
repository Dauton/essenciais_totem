@extends('layouts.head-layout')
@section('head')

<body>
    <main class="principal">
        <section class="centro">

            @yield('essenciais')

            <footer class="rodape">
                <p> &copy; {{date('Y')}} - ID DO BRASIL LOGÍSTICA LTDA.</p>
            </footer>

        </section>
    </main>
</body>

@endsection
