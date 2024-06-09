@extends('layouts.guest')

@section('content')
<div>
    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Pelayanan</p>
                <h1>Berikut Layanan Yang Tersedia</h1>
            </div>
            <div class="row g-4">

                @foreach($service as $s)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-light rounded h-100 p-4">
                        <div class="d-inline-flex align-items-center card justify-content-center p-2 bg-white mb-4"
                            style="width: fit-content; height: fit-content;">
                            <img src="http://127.0.0.1:8000/public/service/{{$s->images}}" width="345px" height="190px" alt="">
                        </div>
                        <h4 class="mb-3">{{$s->nama_services}}</h4>
                        <p class="mb-4" style="text-align: justify; display:inline-block;">{{$s->deskripsi}}</p>
                        <a class="btn" id="riwayatButton" href=""><i class="fa fa-plus text-primary me-3"></i>Tambah</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->
    @endsection
