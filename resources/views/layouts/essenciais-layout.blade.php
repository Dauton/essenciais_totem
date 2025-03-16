@extends('layouts.head-layout')
@section('head')

<body>
    <main class="principal">
        <section class="centro">

            @yield('essenciais')

            @include('footer')

        </section>
    </main>
</body>

@endsection
