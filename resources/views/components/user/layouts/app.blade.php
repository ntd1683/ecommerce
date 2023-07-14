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
    <link rel="stylesheet" href="{{ asset('css/libraries/toasting.css') }}">
    <script src="{{ asset('js/libraries/toasting.js') }}"></script>
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
<x-user.scrollUp />

<x-user.layouts.partials.privacy />

<!-- Footer -->
<x-user.layouts.partials.footer />
<!-- End Footer -->

<x-user.modalShop />

<script src="{{ asset('js/app.js')}}" defer></script>
<script src="{{ asset('js/main.js')}}" defer></script>
<script>
    window.addEventListener('load', function () {
        @if (isset($errors))
        @foreach ($errors->all() as $error)
        toasting.create({
            "title": "Error",
            "text": "{{ $error }}",
            "type": "error",
            "progressBarType": "rainbow"
        });
        @endforeach
        @endif
        @if (session()->has('success'))
        toasting.create({
            "title": "Success",
            "text": "{{ session()->get('success') }}",
            "type": "success",
            "progressBarType": "rainbow"
        });
        @endif
        @if (session()->has('error'))
        toasting.create({
            "title": "Error",
            "text": "{{ session()->get('error') }}",
            "type": "error",
            "progressBarType": "rainbow"
        });
        @endif
    });
</script>
@stack('js')
</body>
</html>
