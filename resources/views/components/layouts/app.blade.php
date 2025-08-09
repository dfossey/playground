<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Playground">
        <meta http-equiv="Cache-control" content="public">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title }}</title>
        <meta name="description" content="{{ $description }}"/>

        @if (env('APP_ENV') == 'production')
            {{-- Analytics à ajouter --}}
        @endif

        {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.ico') }}" type="image/x-icon" />
        <link rel="icon" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}" />
        <link rel="icon" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}" />
        <link rel="icon" sizes="192x192" href="{{ asset('assets/images/favicon/favicon-192x192.png') }}" />
        <link rel="icon" sizes="512x512" href="{{ asset('assets/images/favicon/favicon-512x512.png') }}" />
        <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon/apple-touch-icon.png')}}" /> --}}

        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap') }}"> --}}

        @vite(['resources/sass/app.scss'])
        @stack('styles')
        @livewireStyles
    </head>

    <body class="bg-dark text-white">
        {{ $slot }}

        @vite(['resources/js/app.js'])
        @livewireScriptConfig
        @stack('scripts')
    </body>
</html>
