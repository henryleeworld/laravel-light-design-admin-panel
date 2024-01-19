<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('light-bootstrap/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('light-bootstrap/img/favicon.ico') }}">
    <title>{{ trans('panel.site_title') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Montserrat" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS Files -->
    @vite(['resources/sass/app.scss'])
    <link href="{{ asset('css/light-bootstrap-dashboard.min.css?v=2.0.1') }} " rel="stylesheet" />
    @yield('styles')
</head>
<body>
    <div class="wrapper wrapper-full-page">
        <div class="">
            @yield('content')
        </div>
    </div>
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    <script src="{{ asset('js/light-bootstrap-dashboard.min.js?v=2.0.1') }}" type="text/javascript" defer></script>
    @yield('scripts')
</body>
</html>
