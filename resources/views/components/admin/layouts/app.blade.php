<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>
    <link rel="shortcut icon" href="../../assets/img/favicon.ico"/>
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
            --primary-color: {{ option('primary_color', '#db2777') }};
            --secondary-color: {{ option('secondary_color', '#FF80B5') }};
        }

        .active {
            color: var(--primary-color) !important;
        }

        .active:hover {
            color: var(--secondary-color) !important;
        }
    </style>
    @stack('css')
</head>
<body class="text-blueGray-700 antialiased">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">
    <x-admin.layouts.partials.sidebar/>
    <div class="relative md:ml-64 bg-blueGray-50">
        <x-admin.layouts.partials.header/>
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
            @include('admin.homepage.analystic')
        </div>
        <div class="px-4 md:px-10 mx-auto w-full -m-24 mb-1">
            {{ $slot }}
        </div>
        <x-admin.layouts.partials.footer/>
    </div>
</div>
<script src="{{ asset('js/admin/main.js') }}"></script>
<script src="{{ asset('js/admin/app.js') }}"></script>
<script type="text/javascript">
</script>
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
