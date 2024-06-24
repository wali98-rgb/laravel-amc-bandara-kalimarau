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
    {{-- Modal Start --}}
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header d-flex align-items-center">
                    <div>
                        <h1 class="modal-title fs-5" id="myModalLabel">{{ ucwords($kejadian->jenis_kejadian) }}</h1>
                        <p class="card-text">
                            {{ $kejadian->waktu_kejadian }} | {{ $kejadian->tanggal_kejadian }}
                        </p>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('upload/kejadian/' . $kejadian->img_kejadian) }}"
                        class="card-img-top rounded mx-auto d-block" style="width: 100%;"
                        alt="{{ ucwords($kejadian->jenis_kejadian) }}">
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div> --}}
            </div>
        </div>
    </div>
    {{-- Modal End --}}

    <div class="container-fluid pt-3">
        <h1 class="py-4" style="font-weight: 600" align="center">Detail Kejadian</h1>

        <div class="card mb-3">
            <div class="py-4 bg-secondary d-flex justify-content-center align-items-center"
                style="border-radius: .2rem .2rem 0 0;">
                <button type="button" class="btn btn-transparent d-flex justify-content-center align-items-center"
                    data-bs-toggle="modal" data-bs-target="#myModal" style="width: 100%;">
                    <img src="{{ asset('upload/kejadian/' . $kejadian->img_kejadian) }}"
                        class="card-img-top rounded mx-auto d-block" style="width: 30%; object-fit: contain;"
                        alt="{{ ucwords($kejadian->jenis_kejadian) }}">
                </button>
            </div>

            <div class="card-body">
                <h2 class="card-title d-flex align-items-center">
                    {{ ucwords($kejadian->jenis_kejadian) }}
                </h2>
                <div>
                    <h6 class="p-0 m-0">Nama Pelapor : {{ ucwords($kejadian->nama_pelapor) }}</h6>
                    <h6 class="p-0 m-0">Email Pelapor : {{ $kejadian->email_pelapor }}</h6>
                </div>
                <hr color="secondary">
                <p class="card-text d-flex align-items-center">
                    Status Kejadian :
                    @if ($kejadian->status_kejadian == 'Teratasi')
                        <span class="badge text-bg-success ml-2">{{ $kejadian->status_kejadian }}</span>
                    @elseif ($kejadian->status_kejadian == 'Tidak Teratasi')
                        <span class="badge text-bg-danger ml-2">{{ $kejadian->status_kejadian }}</span>
                    @endif
                </p>
                </p>
                <p class="card-text">
                    Waktu Kejadian : {{ $kejadian->tanggal_kejadian }} |
                    {{ \Carbon\Carbon::parse($kejadian->waktu_kejadian)->format('H:i') }} WIB
                </p>
                <p class="card-text">{{ Str::ucfirst($kejadian->kronologi_kejadian) }}</p>
                <p class="card-text"><small class="text-body-secondary">Terakhir diperbaharui
                        {{ $kejadian->created_at }}</small>
                </p>

                <div class="d-flex">
                    <a href="{{ route('kejadian.index') }}" class="btn btn-danger mr-2">KEMBALI</a>
                    <form action="/status-kejadian/{{ $kejadian->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        @if ($kejadian->status_kejadian == 'Teratasi')
                            <button type="submit" class="btn btn-warning" disabled>UBAH STATUS</button>
                        @elseif ($kejadian->status_kejadian == 'Tidak Teratasi')
                            <button type="submit" class="btn btn-warning">UBAH STATUS</button>
                        @endif
                        {{-- <button type="submit" class="btn btn-warning">UBAH STATUS</button> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        const myModal = document.getElementById('myModal')
        const myInput = document.getElementById('myInput')

        myModal.addEventListener('shown.bs.modal', () => {
            myInput.focus()
        })
        const myModal = new bootstrap.Modal(document.getElementById('myModal'), options)
    </script>
@endsection
