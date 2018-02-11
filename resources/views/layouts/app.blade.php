<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ isset($title) ? ($title . ' — Jack Whiting') : 'Jack Whiting' }}</title>

    <meta name="author" content="Jack Whiting">
    <meta property="og:title" content="{{ $title ?? 'Jack Whiting' }}">
    <meta property="og:description" content="Freelance web developer in the UK. Writing about Laravel, WordPress and Life.">

    @include('feed::links')
    @include('layouts.partials.meta')

    <link rel="preconnect" href="https://use.typekit.net/">
    <link rel="stylesheet" href="https://use.typekit.net/wfq3itw.css">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script defer src="{{ mix('js/app.js') }}"></script>

    @stack('head')
</head>
<body>
    @include('layouts.partials.header')
    
    {{ $slot }}

    @if(app()->environment('production'))
        @include('layouts.partials.analytics')
    @endif

    @include('layouts.partials.footer')
</body>
</html>