<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
        <title>@yield('title') @yield('meta-content')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{asset('/frontend/js/swiper.min.js')}}"></script>
        <!-- <script src="https://cdn.tailwindcss.com"></script> -->

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link href="{{asset('/frontend/css/swiper.min.css')}}" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        <x-banner />
        <div class="header z-[1500]">
            @if(request()->segment(2) == 'restaurant')
                @include('backend.restaurant.header')
            @else
                @include('backend.hefo.top')
                @include('backend.hefo.header')
            @endif
        </div>
        <div class="main">
            @yield('main')
        </div>

        @stack('modals')

        @livewireScripts
        <script>
            window.onunload = function() {
                // window.scrollTo({top: 0});
                // window.top = '0';
                window.scrollTo(0, 0);
            };
        </script>
    </body>
</html>
