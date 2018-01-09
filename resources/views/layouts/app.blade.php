<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Jack Whiting">
    <title>{{ isset($title) ? ($title . ' — Jack Whiting') : 'Jack Whiting' }}</title>

    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=PT+Serif">

    <style>
        body, * {
            font-family: 'PT Serif', serif;
        }
    </style>
</head>
<body>
    @yield('content')

    @if(app()->environment('production'))
        @include('layouts.partials.analytics')
    @endif
</body>
</html>