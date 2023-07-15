<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="../../assets/img/apple-icon.png"
    />
    <link
        rel="stylesheet"
        href="{{ asset('css/admin/style.css') }}"
    />
    <link rel="stylesheet" href="{{ asset('css/admin/app.css') }}"/>
    <title>{{ getTitle() }}</title>

    <link rel="stylesheet" href="{{ asset('css/libraries/toasting.css') }}">
    <script src="{{ asset('js/libraries/toasting.js') }}"></script>
    <style>
        :root {
            --primary-color: {{ option('primary_color', '#8D524D') }};
            --secondary-color: {{ option('secondary_color', '#FF80B5') }};
        }
    </style>
    @stack('css')
</head>
<body class="text-blueGray-700 antialiased">

<main>
    <section class="relative w-full h-full py-10 min-h-screen">
        <div
            class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat"
            style="background-image: url({{ asset('images/admin/register_bg_2.png') }})"
        ></div>
        {{ $slot }}
        <x-admin.layouts.partials.footer />
    </section>
</main>
<script src="{{ asset('js/admin/main.js') }}"></script>
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
</body>
</html>
