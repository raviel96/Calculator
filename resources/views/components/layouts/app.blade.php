<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Calculator by Manuel' }}</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <livewire:partials.header />
        <main>
            {{ $slot }}
        </main>
    </body>
    <script src="{{asset('js/alpine/calculator.js')}}"></script>
</html>
