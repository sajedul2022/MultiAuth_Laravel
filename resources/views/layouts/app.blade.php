<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" href="{{ asset('/assets/img/favicon/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>{{ config('app.name', ' ICT Guidelines Survey') }}</title> --}}
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- @vite(['resources/js/app.js']) --}}
    <link rel="stylesheet" href="{{ asset('/resources/css/app.css') }}">
    <script src="{{ asset('/resources/js/app.js') }}"></script>

    {{-- bootstrap cdn  --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <!-- Apex Charts -->
    <link type="text/css" href="{{ asset('/vendor/apexcharts/apexcharts.css') }}" rel="stylesheet">
    <script src="{{ asset('/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('/assets/js/chartist.min.js') }}"></script>
    <script src="{{ asset('/assets/js/chartist-plugin-tooltip.min.js') }}"></script>

    <!-- Datepicker -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/css/datepicker-bs4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker.min.js"></script>


    <!-- Fontawesome -->
    <link type="text/css" href="{{ asset('/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">

    <!-- Sweet Alert -->
    <link type="text/css" href="{{ asset('/vendor/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet">

    <!-- Notyf -->
    <link type="text/css" href="{{ asset('/vendor/notyf/notyf.min.css') }}" rel="stylesheet">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('/css/volt.css') }}" rel="stylesheet">

    <!-- Vendor JS -->
    <script src="{{ asset('/assets/js/on-screen.umd.min.js') }}"></script>

    <!-- Slider -->
    <script src="{{ asset('/assets/js/nouislider.min.js') }}"></script>

    <!-- Smooth scroll -->
    <script src="{{ asset('/assets/js/smooth-scroll.polyfills.min.js') }}"></script>

    <!-- Sweet Alerts 2 -->
    <script src="{{ asset('/assets/js/sweetalert2.all.min.js') }}"></script>

    <!-- Moment JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

    <!-- Notyf -->
    <script src="{{ asset('/vendor/notyf/notyf.min.js') }}"></script>

    <!-- Simplebar -->
    <script src="{{ asset('/assets/js/simplebar.min.js') }}"></script>

    <!-- Volt JS -->
    <script src="{{ asset('/assets/js/volt.js') }}"></script>

     <!-- Icon Font Stylesheet -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

     {{-- Custom --}}



</head>

<body>


    @include('layouts.nav')

    @include('layouts.sidenav')

    <main class="content">

        {{-- TopBar --}}
        @include('layouts.topbar')

        {{-- {{ $slot }} --}}
        @yield('content')

        {{-- Footer --}}
        @include('layouts.footer')

    </main>



    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>

</html>
