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
    <title>Dashboard | Notus Tailwind JS by Creative Tim</title>
</head>
<body class="text-blueGray-700 antialiased">
<noscript>You need to enable JavaScript to run this app.</noscript>
<div id="root">
    <x-admin.layouts.partials.sidebar />
    <div class="relative md:ml-64 bg-blueGray-50">
        <x-admin.layouts.partials.header />
        <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
            @include('admin.homepage.analystic')
        </div>
        {{ $slot }}
    </div>
</div>
<script src="{{ asset('js/admin/main.js') }}"></script>
<script type="text/javascript">
</script>
</body>
</html>
