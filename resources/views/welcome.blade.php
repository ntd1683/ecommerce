<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/libraries/toasting.css') }}">
    <script src="{{ asset('js/libraries/toasting.js') }}"></script>
</head>
<body>
<h1 class="text-3xl font-bold underline">
    Hello world!
</h1>
<div id="app">
    <v-example />
</div>
</body>
<script src="{{ asset('js/app.js') }}" defer></script>
<script>
    window.addEventListener('load', () => {
        toasting.create({
            "title": "Error",
            "text": "kkkkk",
            "type": "error",
            "progressBarType": "rainbow"
        })
        toasting.create({
            "title": "Error",
            "text": "123414124",
            "type": "error",
            "progressBarType": "rainbow"
        })
    })
</script>
</html>
