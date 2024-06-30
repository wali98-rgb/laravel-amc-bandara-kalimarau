@extends('client.layouts.master')

@section('css_plus')
    <link rel="stylesheet" href="{{ asset('frontend/css/pages/kejadian.css') }}">
@endsection

@section('carousel')
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 50vh">
                <img src="{{ asset('frontend/img/caro3.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
@endsection

@section('main_content')
    <div class="container p-5 d-flex justify-content-center align-items-center">
        {{ $qrcode }}
    </div>
@endsection
