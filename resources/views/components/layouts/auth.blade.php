<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:title" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:description" content="Yashadmin:Sales Management System Admin Bootstrap 5 Template">
    <meta property="og:image" content="https:/yashadmin.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>HR Lounge </title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('/master/images/favicon.png') }}">
    <link href="{{ asset('/master/css/style.css') }}" rel="stylesheet">
    @stack('styles')

</head>

<body class="vh-100" style="background-image:url('/master/images/bg.png';background-position:center; ">

    {{ $slot }}

    <script src="{{ asset('/master/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('/master/js/custom.js') }}"></script>
    <script src="{{ asset('/master/js/deznav-init.js') }}"></script>
    @stack('scripts')
</body>

</html>
