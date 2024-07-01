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
    <nav class="n4v2">
        <div class="n4v2l0 d-flex justify-content-between align-items-center">
            <div class="pt-3">
                <img width="50%" src="{{ asset('frontend/img/header.png') }}" alt="">
            </div>
            <div style="width: 53rem;" class="text-right d-flex justify-content-between align-items-center">
                <h3>AMC Bandara Kalimarau</h3>
                <div class="n4v2Im9">
                    <img src="{{ asset('frontend/img/logo-amc.jpeg') }}" alt="AMC Bandara Kalimarau">
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar Section End --}}

    {{-- Alert Section Start --}}
    {{-- @if (session('success'))
        <div class="container">
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        </div>
    @endif --}}
    {{-- Alert Section End --}}

    {{-- Main Content Section Start --}}
    <div class="c0f0 container my-4">
        <div class="card shadow p-4 bg-light">
            <div class="container p-5 d-flex justify-content-center align-items-center">
                {{ $qrcode }}
            </div>
        </div>
    </div>
    {{-- Main Content Section End --}}

    {{-- Footer Section Start --}}
    <x-footer></x-footer>
    {{-- Footer Section End --}}

    {{-- My JS CDN --}}
    @include('assets.js')
    @include('sweetalert::alert')

    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script> --}}
</body>

</html>
