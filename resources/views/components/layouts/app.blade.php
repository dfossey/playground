<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="dark">
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

        @vite(['resources/sass/app.scss'])
        @stack('styles')
        @livewireStyles
        @include('partials.scripts.theme')
    </head>

    <body
        class="d-flex flex-row"
        @if (($_COOKIE['data-kt-aside-minimize'] ?? null) === 'on')
            data-kt-aside-minimize="on"
        @endif
    >
        @include('partials.sidebar')

        <div class="wrapper d-flex flex-column flex-row-fluid">
            @include('partials.header')

            <div class="content d-flex flex-column flex-column-fluid mb-0">
                {{ $slot }}
            </div>

            @include('partials.footer')
        </div>

        {{-- <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script> --}}
        {{-- <script src="{{ asset('assets/js/plugins.bundle.js') }}"></script> --}}
        @vite(['resources/js/app.js'])
        @livewireScriptConfig
        @stack('scripts')
    </body>
</html>
