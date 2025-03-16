@extends('layouts.head-layout')
@section('head')


<link rel='stylesheet' type="text/css" href="{{ asset('assets/css/login.css') }}">

<body>
    <main class="principal">
        <section class="center">
            @yield('login')
        </section>

    </main>

    @include('footer')

</body>

</html>
@endsection
