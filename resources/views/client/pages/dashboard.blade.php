@extends('client.layouts.master')

@section('carousel')
    <div id="carouselExampleDark" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000" style="height: 100vh">
                <img src="{{ asset('frontend/img/caro1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"
                    style="background-color: rgba(0, 30, 70, 0.3); border-radius: .3rem">
                    <h5>Pelaporan Kejadian AMC Bandara Kalimarau</h5>
                    <p>Melaporkan segala bentuk kejadian di bandara Kalimarau.</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000" style="height: 100vh">
                <img src="{{ asset('frontend/img/caro2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"
                    style="background-color: rgba(0, 30, 70, 0.3); border-radius: .3rem">
                    <h5>AMC Bandara Kalimaru</h5>
                    <p>Kantor Unit Penyelenggara Bandar Udara Kelas I Kalimarau.</p>
                </div>
            </div>
            <div class="carousel-item" style="height: 100vh">
                <img src="{{ asset('frontend/img/caro3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block"
                    style="background-color: rgba(0, 30, 70, 0.3); border-radius: .3rem">
                    <h5>AMC Bandara Kalimarau</h5>
                    <p>Unit Penyelenggara Bandar Udara di lingkungan Kementerian Perhubungan.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection

@section('main_content')
    <div class="c0nt container py-4">
        <div class="c0nTt7L text-center mt-3 mb-5">
            <h1>Dashboard</h1>
        </div>

        <div class="card p-3 mb-2">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('frontend/img/schedule.jpg') }}" alt="Jadwal Penerbangan" width="100%"
                        height="100%" class="rounded">
                </div>

                <div class="col-8">
                    <h2>Jadwal Penerbangan Bandara Kalimarau</h2>
                    <p align="justify">
                        Pemberitahuan Rencana Flight Aktif Super Air Jet di Bandar Udara Kalimarau Berau, Rencana
                        penerbangan Maskapai Super Air Jet akan menggunakan Pesawat Airbus A320 dengan Seat 180 Ekonomi,
                        Periode Efektif di jadwalkan pada Tanggal <b>14 Juni 2024</b> yang melayani penerbangan regular rute
                        Surabaya - Berau PP <b>Setiap Hari</b> (Frekuensi 7X) dalam seminggu dengan jadwal penerbangan di
                        sesuaikan dengan waktu setempat:

                        <br><br>

                        <b>IU 672 SUB - BEJ</b> <br>
                        - SUB (15:10 wib) to BEJ (18:10 wita) <br>
                        <b>IU 673 BEJ - SUB</b> <br>
                        - BEJ (18:50 wita) to SUB (19:45 wib)
                    </p>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('frontend/img/bhayangkara.jpg') }}" alt="Jadwal Penerbangan" width="100%"
                        height="100%" class="rounded">
                </div>

                <div class="col-8">
                    <h2>BLU UPBU Kelas I Kalimarau</h2>
                    <p align="justify">
                        BLU UPBU Kelas I Kalimarau mengucapkan Selamat Hari Bhayangkara Ke 78, Maju terus kepolisian
                        Republik Indonesia.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
