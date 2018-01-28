<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Jack Whiting">
    <title>{{ isset($title) ? ($title . ' — Jack Whiting') : 'Jack Whiting' }}</title>

    <link rel="preconnect" href="https://use.typekit.net/">
    <link rel="stylesheet" href="https://use.typekit.net/wfq3itw.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script async src="{{ asset('js/app.js') }}"></script>

    <style>
        body, * {
        }
    </style>
</head>
<body>
    @include('layouts.partials.header')
    
    {{ $slot }}

    @if(app()->environment('production'))
        @include('layouts.partials.analytics')
    @endif
</body>
</html>