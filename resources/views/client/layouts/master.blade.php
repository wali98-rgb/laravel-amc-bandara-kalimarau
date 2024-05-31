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

    <title>AMC Bandara Kalimarau | AMC-BK</title>
</head>

<body>
    {{-- Preloader Session Start --}}
    {{-- Preloader Session End --}}

    {{-- Navbar Session Start --}}
    <x-navbar></x-navbar>
    {{-- Navbar Session End --}}

    {{-- Main Content Session Start --}}
    @yield('main_content')
    {{-- Main Content Session End --}}

    {{-- Footer Session Start --}}
    <x-footer></x-footer>
    {{-- Footer Session End --}}

    {{-- My JS CDN --}}
    @include('assets.js')
</body>

</html>
