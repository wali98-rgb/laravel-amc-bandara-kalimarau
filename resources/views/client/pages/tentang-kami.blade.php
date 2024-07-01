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
            <h1>Tentang Kami</h1>
        </div>

        <div class="card p-3 mb-4">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('frontend/img/logo-amc.jpeg') }}" class="rounded" alt="Logo" width="100%">
                </div>

                <div class="col-8">
                    <h2>AMC Bandara Kalimarau</h2>
                    <p align="justify">Bandara Kalimarau adalah bandar udara yang terletak di Kecamatan Teluk Bayur,
                        Kabupaten
                        Berau,Kalimantan Timur dengan koordinat 02°00'12"N dan 117°25'52"E. Nama Kalimarau berasal dari anak
                        sungai yang mengalir di depan terminal bandar udara. Kecamatan ini dahulu adalah sebuah kota yang
                        berjaya pada masa lalu dan menjadi pusat industri batu bara yang ditandai dengan hadirnya perusahaan
                        Stenkollen Matschappy Parapattan(SMP). Perusahaan penambangan batu bara milik Belanda yang berdiri
                        pada 1912 itu menandai terbukanya Teluk Bayur bagi para pendatang.</p>
                    <p align="justify">
                        <b>Bandar Udara Kalimarau didirikan tahun 1976</b> dengan kategori bandara perintis. Fasilitas
                        Bandar Udara
                        Kalimarau telah beberapa kali dilakukan peningkatan, diantaranya mulai peningkatan landasan pacu
                        (runway) dan peralatan navigasi yang kemudian menjadikan Bandar Udara Kalimarau sebagai bandar udara
                        Kelas I.
                    </p>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <div class="row">
                <div class="col-8">
                    <h2>Kalimarau - Profil Fasilitas</h2>
                    <p>
                        <b>Sejarah</b> awal berdirinya Bandar Udara Kalimarau mempunyai panjang runway pada hanya 650 meter
                        mengingat pesawat yang mendarat hanya pesawat kecil jenis MAF 506 dengan jumlah penumpang 5 orang
                        dan 2 awak pesawat. Pesawat jenis ini, sering disebut pesawat Capung dan Apron saat itu masih
                        menggunakan plat. Memasuki periode tahun 1990-an dilakukan peningkatan dengan pesawat yang mendarat
                        dengan jenis Cassa dengan Airlines Deraya, Pelita, Asahi, DAS dengan type 100 dan 200 dengan
                        menggunakan landasan lama yang berada tepat di sisi jalan raya Teluk Bayur. Sehubungan dengan telah
                        banyak dilakukan pengembangan dan renovasi untuk peningkatan fasilitas, jenis pesawat yang mendarat
                        juga mengalami peningkatan pada tahun 2002 dibandingkan yakni jenis ATR 42 milik perusahaan
                        penerbangan yang beroperasi di Kalimarau seperti Deraya, DAS, Wings Air dan Kal Star.
                    </p>
                </div>
                <div class="col-4">
                    <iframe width="100%" height="100%" class="rounded"
                        src="https://www.youtube.com/embed/2iWkAuJtjx4?si=b2yRZKyoyV1t_-iQ" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>

        <div class="card p-3 mt-2">
            <div>
                <h2>Sosial Media</h2>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <a class="btn btn-success d-flex align-items-center px-2 py-0" href="" target="__blank"><i
                        class="bi bi-instagram" style="font-size: 2rem"></i></a>
                <a class="btn btn-primary d-flex align-items-center px-2 py-0 mx-2" href="" target="__blank"><i
                        class="bi bi-facebook" style="font-size: 2rem"></i></a>
                <a class="btn btn-danger d-flex align-items-center px-2 py-0" href="" target="__blank"><i
                        class="bi bi-youtube" style="font-size: 2rem"></i></a>
            </div>
        </div>
    </div>
@endsection
