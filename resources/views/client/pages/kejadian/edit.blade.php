@extends('client.layouts.master')

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
    <div class="container py-4">
        <div class="py-3">
            <h1 class="text-center mb-4">Form Input Kejadian AMC Bandara Kalimarau</h1>
        </div>
        <div class="card p-2 py-4">
            <form action="/kejadian/{{ $kejadian->id }}" class="form px-3" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <div class="col-12">
                        <label for="statusKejadian">Status Kejadian</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-certificate"></i>
                                </div>
                            </div>
                            <select class="form-select @error('status_kejadian') is-invalid @enderror"
                                name="status_kejadian" id="statusKejadian">
                                <option disabled>--Status Kejadian--</option>
                                @if ($kejadian->status_kejadian == 'Teratasi')
                                    <option value="Teratasi" selected>Teratasi</option>
                                    <option value="Tidak Teratasi">Tidak Teratasi</option>
                                @elseif ($kejadian->status_kejadian == 'Tidak Teratasi')
                                    <option value="Teratasi">Teratasi</option>
                                    <option value="Tidak Teratasi" selected>Tidak Teratasi</option>
                                @endif
                            </select>
                        </div>
                        @error('jenis_kejadian')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="f0gp form-group row">
                    <div class="col-6">
                        <label for="namaLengkapPelapor">Nama Lengkap Pelapor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input value="{{ $kejadian->nama_pelapor }}" type="text"
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
                            <input value="{{ $kejadian->email_pelapor }}" type="email"
                                class="form-control @error('email_pelapor') is-invalid @enderror" name="email_pelapor"
                                id="emailPelapor" placeholder="info@example.com">
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
                            <input value="{{ $kejadian->jenis_kejadian }}" type="text"
                                class="form-control @error('jenis_kejadian') is-invalid @enderror" name="jenis_kejadian"
                                id="jenisKejadian" placeholder="Jenis Kejadian...">
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
                            <input value="{{ $kejadian->waktu_kejadian }}" type="time"
                                class="form-control @error('waktu_kejadian') is-invalid @enderror" name="waktu_kejadian"
                                id="waktuKejadian">
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
                            <input value="{{ $kejadian->tanggal_kejadian }}" type="date"
                                class="form-control @error('tanggal_kejadian') is-invalid @enderror" name="tanggal_kejadian"
                                id="tanggalKejadian">
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
                            id="kronologiKejadian" rows="3" placeholder="Kronologi Kejadian...">{{ $kejadian->kronologi_kejadian }}</textarea>
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
                        <input value="{{ $kejadian->img_kejadian }}" name="img_kejadian"
                            class="form-control @error('img_kejadian') is-invalid @enderror" type="file"
                            id="fotoKejadian">
                        @error('img_kejadian')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary" type="submit">KIRIM</button>
                    <button class="btn btn-warning" type="reset">RESET</button>
                    <a class="btn btn-danger" href="{{ route('kejadian.index') }}">KEMBALI</a>
                </div>
            </form>
        </div>
    </div>
@endsection
