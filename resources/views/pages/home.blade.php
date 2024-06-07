@extends('layouts.guest')

@section('content')
    <div>
        <!-- Header Start -->
        <div class="container-fluid header bg-primary p-0 mb-5">
            <div class="row g-0 align-items-center flex-column-reverse flex-lg-row">
                <div class="col-lg-6 p-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-4 text-white mb-5">Selamat Datang di Apotek Online Kami!</h1>
                    
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="landing/img/home-1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="landing/img/home-2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="landing/img/home-3.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item position-relative">
                            <img class="img-fluid" src="landing/img/home-4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Jenis obat yg tersedia -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1>Beberapa Jenis Obat Yang Kami Sediakan</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-heartbeat text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Antibiotik</h4>
                            <p class="mb-4">Obat yang digunakan untuk mengobati infeksi bakteri.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-x-ray text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Antasida</h4>
                            <p class="mb-4">Obat yang dapat meredakan gangguan pencernaan 
                                dan gejala mulas dengan cara menetralkan asam lambung.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-brain text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Antidiare</h4>
                            <p class="mb-4">Obat ini digunakan untuk mengatasi buang air besar encer berkali-kali alias diare.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-wheelchair text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Antijamur</h4>
                            <p class="mb-4">Jenis obat ini digunakan untuk mengobati infeksi jamur 
                                yang umumnya menyerang rambut, kulit, kuku, atau selaput lendir.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-tooth text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Antipiretik</h4>
                            <p class="mb-4">Golongan obat antipiretik berfungsi untuk menurunkan demam 
                                dan meredakan nyeri akibat radang sendi, cedera, sakit gigi, dan sakit kepala.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-light rounded h-100 p-5">
                            <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                                style="width: 65px; height: 65px;">
                                <i class="fa fa-vials text-primary fs-4"></i>
                            </div>
                            <h4 class="mb-3">Analgesik</h4>
                            <p class="mb-4">Fungsi dari obat analgesik adalah untuk meredakan nyeri, 
                                baik nyeri ringan maupun nyeri berat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jenis obat yg tersedia End -->


        <!-- Feature Start -->
        <div class="container-fluid bg-primary overflow-hidden my-5 px-lg-0">
            <div class="container feature px-lg-0">
                <div class="row g-0 mx-lg-0">
                    <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="p-lg-5 ps-lg-0">
                            <h1 class="text-white mb-4">Mengapa Harus Memilih Kami?</h1>
                            <div class="row g-4">
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-user-md text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">Pengalaman</p>
                                            <h5 class="text-white mb-0">Apoteker</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-check text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">Kualitas</p>
                                            <h5 class="text-white mb-0">Servis</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-comment-medical text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">Gratis</p>
                                            <h5 class="text-white mb-0">Konsultasi</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-light"
                                            style="width: 55px; height: 55px;">
                                            <i class="fa fa-headphones text-primary"></i>
                                        </div>
                                        <div class="ms-4">
                                            <p class="text-white mb-2">24 Jam</p>
                                            <h5 class="text-white mb-0">Tersedia</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="landing/img/choose.jpg"
                                style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->
    </div>
@endsection
