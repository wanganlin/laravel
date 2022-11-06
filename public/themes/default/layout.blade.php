<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PHPIMS') }}</title>
    <link rel="stylesheet" href="{{ asset('assets/layui/css/layui.css') }}" />
    <script type="text/javascript" src="{{ asset('assets/layui/layui.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/vue/vue.min.js') }}"></script>
    <link rel="stylesheet" href="{{ skin('css/app.css') }}" />
    <script type="text/javascript" src="{{ skin('js/app.js') }}"></script>
</head>
<body>
@yield('content')
</body>
</html>
