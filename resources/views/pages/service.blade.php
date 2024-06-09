@extends('layouts.guest')

@section('content')
<div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Pelayanan</p>
                <h1>Alur Konsultasi Obat Online</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-heartbeat text-primary fs-4"></i>
                        </div>
                        <h3>Langkah 1</h3>
                        <h4 class="mb-3">Ketahui Gejala Pribadi</h4>
                        <p class="mb-4" style="text-align: justify; display:inline-block;">Ketahui Gejala Pribadi yang
                            anda alami terlebih dahulu. Ingat semua keluhan yang anda rasakan pada tubuh anda untuk
                            dianalisa oleh dokter kami!</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-x-ray text-primary fs-4"></i>
                        </div>
                        <h3>Langkah 2</h3>
                        <h4 class="mb-3">Ajukan Keluhan</h4>
                        <p class="mb-4" style="text-align: justify; display:inline-block;">Ajukan gejala yang anda alami
                            pada <b>Form Konsultasi</b> yang berada dibawah ini <b>Alur Konsultasi Obat</b> ini, agar
                            keluhan anda dapat diproses dan dianalisa oleh dokter kami! </p>
                        <a class="btn" id="konsultasiButton"><i class="fa fa-plus text-primary me-3"></i>Konsultasi</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                            style="width: 65px; height: 65px;">
                            <i class="fa fa-brain text-primary fs-4"></i>
                        </div>
                        <h3>Langkah 3</h3>
                        <h4 class="mb-3">Riwayat Konsultasi</h4>
                        <p class="mb-4" style="text-align: justify; display:inline-block;">Anda dapat menunggu hingga
                            keluhan diproses dan dianalisa oleh dokter kami! Anda juga dapat melihat gejala yang terjadi
                            kepada pasien lainnya pada <b>Riwayat Konsultasi</b> dibawah <b>Form Pelayanan</b> kami! </p>
                        <a class="btn" id="riwayatButton" href=""><i class="fa fa-plus text-primary me-3"></i>Riwayat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Appointment Start -->
    <div class="container-xxl py-5 mt-5" id="formPelayanan">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Janji Temu</p>
                    <h1 class="mb-4">Buat Janji Bertemu untuk mengunjungi Dokter Kami!</h1>
                    <p class="mb-4">Anda juga bisa membuat Janji Temu dengan Dokter kami! Anda bisa menghubungi kami
                        melalui nomor telephone dan email yang telah kami terakan dibawah ini!</p>
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Hubungi Kami Sekarang</p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white"
                            style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Pesan Kami Sekarang</p>
                            <h5 class="mb-0">apotekonline@clinicwebsite.com</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form>
                            <h1 class="text-center">Form Pelayanan</h1>
                            <hr>
                            <div class="row g-3">
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Nama"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control border-0" placeholder="Telephone"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <input type="email" class="form-control border-0" placeholder="Email"
                                        style="height: 55px;">
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" rows="5"
                                        placeholder="Ceritakan Keluhan Anda!"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

    <!-- Recommendation Start -->
    <div class="container-xxl py-5 mt-5" id="riwayatKonsultasi">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Riwayat Konsultasi</p>
                <h1>Riawayat Konsultasi Obat Online Pasien Kami!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-1.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Ridho Alfandi</h5>
                        <span class="fst-italic">Tim Leader</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-2.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Wan Nadila Artika</h5>
                        <span class="fst-italic">Database Analyse</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Marshanda</h5>
                        <span class="fst-italic">Frontend</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid bg-light rounded-circle p-2 mx-auto mb-4" src="img/testimonial-3.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Digdaya Rayhan Bagaskara</h5>
                        <span class="fst-italic">Backend</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Recommendation End -->
    <!-- JavaScript for smooth scroll -->
    <script>
        document.getElementById('konsultasiButton').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action of the link
            document.getElementById('formPelayanan').scrollIntoView({
                behavior: 'smooth'
            });
        });
        document.getElementById('riwayatButton').addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default action of the link
            document.getElementById('riwayatKonsultasi').scrollIntoView({
                behavior: 'smooth'
            });
        });

    </script>
    @endsection
