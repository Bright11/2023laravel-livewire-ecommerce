<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AliExpress</title>
    <script src="https://kit.fontawesome.com/0560d0caf7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mediaquery.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @stack('style')

    <script defer src="{{ asset('js/myjs.js') }}"></script>
</head>
<body>

    @include('frontend.layouts.nav')
    @yield('content')
    @include('frontend.layouts.footer')
