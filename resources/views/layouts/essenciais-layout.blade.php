@include('layouts.head-layout')

<body>
    <main class="principal">
        <section class="centro">

            @yield('essenciais')

            @include('footer')

        </section>
    </main>

    @if (session('alertError'))
        <p class="alert-error">{{session('alertError')}}</p>
    @endif

</body>
