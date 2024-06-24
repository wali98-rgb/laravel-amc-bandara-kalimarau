<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- My Link CDN --}}
    @include('assets.css')
    <link rel="stylesheet" href="{{ asset('frontend/css/frontend-app.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/partials/Navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/partials/Footer.css') }}">

    <title>AMC Bandara Kalimarau | AMC-BK</title>
</head>

<body>
    {{-- Preloader Section Start --}}
    {{-- Preloader Section End --}}

    {{-- Navbar Section Start --}}
    <x-navbar></x-navbar>
    {{-- Navbar Section End --}}

    {{-- Carousel Section Start --}}
    @yield('carousel')
    {{-- Carousel Section End --}}

    {{-- Main Content Section Start --}}
    @yield('main_content')
    {{-- Main Content Section End --}}

    {{-- Footer Section Start --}}
    <x-footer></x-footer>
    {{-- Footer Section End --}}

    {{-- My JS CDN --}}
    @include('assets.js')
    @include('sweetalert::alert')
</body>

</html>
