@extends('layouts.guest')

@section('content')
    <div>
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Pelayanan</p>
                    <h1>Berikut Deskripsi Pelayanan {{ $service->nama_services }} </h1>
                </div>
                <div>
                    <div class="d-inline-flex align-items-center justify-content-center p-2 bg-white mb-4"
                        style="width: 100%; height: fit-content;">
                        <img src="{{ asset('service/' . $service->images) }}" width="345px" height="230px" alt="">
                    </div>
                    <p>Deskripsi : {{ $service->deskripsi }} </p>
                </div>
                <div class="row g-4">
                    <h5>Beberapa pelayanan yang memiliki kategori yang sama</h1>
                        @foreach ($servicesCategory as $service)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <a href="/product/{{ $service->service_id }}">
                                    <div class="service-item bg-light rounded h-100 p-4">
                                        <div class="d-inline-flex align-items-center card justify-content-center p-2 bg-white mb-4"
                                            style="width: fit-content; height: fit-content;">
                                            <img src="{{ asset('service/' . $service->images) }}" width="345px"
                                                height="190px" alt="">
                                        </div>
                                        <h4 class="mb-3">{{ $service->nama_services }}</h4>
                                        <p class="mb-4" style="text-align: justify; display:inline-block;">
                                            {{ $service->nama_service }}
                                        </p>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                </div>
            </div>
        </div>
        <!-- Service End -->
    @endsection
