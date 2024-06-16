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
    <div class="c0nt container py-4">
        <div class="c0nTt7L text-center mt-3 mb-5">
            <h1>Daftar Kejadian Bandara Kalimarau</h1>
        </div>

        @if ($kejadian->isEmpty())
            <div class="c0ntM4 container">
                <div class="c0ntM4im9 mb-3">
                    <img src="{{ asset('frontend/img/no-data-available.jpg') }}" alt="">
                </div>
                <h2 class="text-center">Tidak ada kejadian yang Tersedia...</h2>
            </div>
        @else
            <div class="container">
                @foreach ($kejadian as $item)
                    <div class="card mb-3" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{ asset('upload/kejadian/' . $item->img_kejadian) }}"
                                    class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->jenis_kejadian }}</h5>
                                    <p class="card-text">{{ $item->kronologi_kejadian }}</p>
                                    <p class="card-text"><small class="text-body-secondary">{{ $item->tanggal_kejadian }} |
                                            {{ $item->waktu_kejadian }}</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-end">
                    {{ $kejadian->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection
