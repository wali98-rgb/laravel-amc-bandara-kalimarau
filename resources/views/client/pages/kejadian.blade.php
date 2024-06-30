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
            <h1>Daftar Kejadian AMC Bandara Kalimarau</h1>
        </div>

        @if ($kejadian->isEmpty())
            <div class="c0ntM4 container">
                <div class="c0ntM4im9 mb-3">
                    <img src="{{ asset('frontend/img/no-data-available.jpg') }}" alt="Data Belum Tersedia!">
                </div>
                <h2 class="text-center">Tidak ada kejadian yang Tersedia...</h2>
            </div>
        @else
            <div class="container">
                @foreach ($kejadian as $item)
                    <div class="card mb-3 rounded" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-md-4 p-2 d-flex justify-content-center align-items-center bg-secondary"
                                style="overflow: hidden; border-radius: .2rem 0 0 .2rem;">
                                <img style="width: 100%; height: 100%; object-fit: contain;"
                                    src="{{ asset('upload/kejadian/' . $item->img_kejadian) }}"
                                    class="img-fluid rounded-start"
                                    alt="{{ asset('upload/kejadian/' . $item->img_kejadian) }}">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title d-flex align-items-center">{{ $item->jenis_kejadian }} |
                                        @if ($item->status_kejadian == 'Teratasi')
                                            <span class="badge text-bg-success ml-2">{{ $item->status_kejadian }}</span>
                                        @elseif ($item->status_kejadian == 'Tidak Teratasi')
                                            <span class="badge text-bg-danger ml-2">{{ $item->status_kejadian }}</span>
                                        @endif
                                    </h5>
                                    <p class="card-text mb-1">Pelapor : {{ ucwords($item->nama_pelapor) }},
                                        {{ $item->email_pelapor }}</p>
                                    <hr class="mt-0" color="secondary">
                                    <p class="card-text">
                                        {{ \Illuminate\Support\Str::words($item->kronologi_kejadian, 20, '...') }}</p>
                                    <p class="card-text"><small class="text-body-secondary">{{ $item->tanggal_kejadian }} |
                                            {{ \Carbon\Carbon::parse($item->waktu_kejadian)->format('H:i') }} WIB</small>
                                    </p>
                                </div>
                                <div class="card-footer">
                                    {{-- <form action="/kejadian/{{ $item->id }}" method="POST"> --}}
                                    <a href="{{ route('kejadian.show', $item->id) }}" class="btn btn-primary">DETAIL</a>
                                    <a href="{{ route('kejadian.edit', $item->id) }}" class="btn btn-warning">EDIT</a>
                                    {{-- @csrf
                                        @method('DELETE') --}}
                                    <a href="{{ route('kejadian.destroy', $item->id) }}" class="btn btn-danger"
                                        data-confirm-delete="true">HAPUS</a>
                                    {{-- </form> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-between">
                    <div>
                        <a href="{{ route('kejadian.create') }}" class="btn btn-success">TAMBAH KEJADIAN</a>
                    </div>

                    {{-- Pagination --}}
                    {{ $kejadian->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection
