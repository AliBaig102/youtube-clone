<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('site-title','YouTube')</title>
    <link rel="shortcut icon" href="{{asset('images/youtube.png')}}" type="image/x-icon">
    @stack('css')
    @vite('resources/css/app.css')
</head>
<body>
@yield('sidebar')
@yield('content')
</body>
</html>
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
@include('layout.main_script')
@stack('javascript')
