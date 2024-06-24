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
            <div class="f07tl">
                <h1 class="text-center mb-4">Form Input Kejadian AMC Bandara Kalimarau</h1>
            </div>

            <div class="f0m4">
                <form action="{{ route('form.store') }}" class="form px-3" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="f0gp form-group row">
                        <div class="col-6">
                            <label for="namaLengkapPelapor">Nama Lengkap Pelapor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input value="{{ old('nama_pelapor') }}" type="text"
                                    class="form-control @error('nama_pelapor') is-invalid @enderror" name="nama_pelapor"
                                    id="namaLengkapPelapor" placeholder="Nama Lengkap..." autofocus>
                            </div>
                            @error('nama_pelapor')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="emailPelapor">Email Pelapor</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                                <input value="{{ old('email_pelapor') }}" type="email"
                                    class="form-control @error('email_pelapor') is-invalid @enderror"
                                    name="email_pelapor" id="emailPelapor" placeholder="info@example.com">
                            </div>
                            @error('email_pelapor')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="jenisKejadian">Jenis Kejadian</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-codepen"></i>
                                    </div>
                                </div>
                                <input value="{{ old('jenis_kejadian') }}" type="text"
                                    class="form-control @error('jenis_kejadian') is-invalid @enderror"
                                    name="jenis_kejadian" id="jenisKejadian" placeholder="Jenis Kejadian...">
                            </div>
                            @error('jenis_kejadian')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-6">
                            <label for="waktuKejadian">Waktu Kejadian</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-hourglass-half"></i>
                                    </div>
                                </div>
                                <input value="{{ old('waktu_kejadian') }}" type="time"
                                    class="form-control @error('waktu_kejadian') is-invalid @enderror"
                                    name="waktu_kejadian" id="waktuKejadian">
                            </div>
                            @error('waktu_kejadian')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-6">
                            <label for="tanggalKejadian">Tanggal Kejadian</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                </div>
                                <input value="{{ old('tanggal_kejadian') }}" type="date"
                                    class="form-control @error('tanggal_kejadian') is-invalid @enderror"
                                    name="tanggal_kejadian" id="tanggalKejadian">
                            </div>
                            @error('tanggal_kejadian')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="kronologiKejadian">Kronologi Kejadian</label>
                            <textarea name="kronologi_kejadian" class="form-control @error('kronologi_kejadian') is-invalid @enderror"
                                id="kronologiKejadian" rows="3" placeholder="Kronologi Kejadian...">{{ old('kronologi_kejadian') }}</textarea>
                            @error('kronologi_kejadian')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-12">
                            <label for="fotoKejadian" class="form-label">Foto Kejadian</label>
                            <input value="{{ old('img_kejadian') }}" name="img_kejadian"
                                class="form-control @error('img_kejadian') is-invalid @enderror" type="file"
                                id="fotoKejadian">
                            @error('img_kejadian')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Kirim</button>
                    </div>
                </form>
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
