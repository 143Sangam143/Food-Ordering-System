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
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        

        <!-- Styles -->
        @livewireStyles
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
        <link href="{{asset('/frontend/css/swiper.min.css')}}" rel="stylesheet">

        <style>
            body::-webkit-scrollbar {
                display: none;
            }
            body {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />
        <div class="header z-[1500]">
            @include('frontend.hefo.top')
            @include('frontend.hefo.header')
        </div>
        <div class="main">
            @yield('main')
        </div>
        <div class="footer">
            @include('frontend.hefo.footer')
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
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>
    </body>
</html>
