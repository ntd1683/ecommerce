<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    @if (option('site_favicon'))
        <link rel="shortcut icon" href="{{ asset(option('site_favicon')) }}">
    @endif

    <title>{{ option('site_name', config('app.name', 'Laravel')) }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />

    <style>
        :root {
            --primary-color: {{ option('primary_color', '#8D524D') }};
            --secondary-color: {{ option('secondary_color', '#FF80B5') }};
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/libraries/style.css') }}" />

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('css')
</head>
<body class="font-poppins text-dark text-xl leading-loose">
<!-- Header -->
<x-user.layouts.partials.header />
<!--End Header -->

<!-- Content -->
{{ $slot }}
<!-- End Content -->
<x-user.layouts.partials.scrollUp />
<x-user.layouts.partials.privacy />

{{--<script src="{{ asset('js/app.js')}}" defer></script>--}}
<script src="{{ asset('js/main.js')}}" defer></script>
@stack('js')
</body>
</html>
