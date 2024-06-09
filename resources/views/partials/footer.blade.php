<div class="container-fluid bg-dark text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-light mb-4">Alamat</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Umban Sari, Kecamatan Rumbai, Kota Pekanbaru, Riau</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                    @php
                        $profile = App\Models\Profile::find(1); 
                    @endphp

                    @if($profile && !empty($profile->no_hp))
                        {{ $profile->no_hp }}
                    @else
                        No Kosong
                    @endif
                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                    @php
                    $user = App\Models\User::find(1); 
                    @endphp
                
                    @if($user)
                        {{ $user->email }}
                    @endif
                </p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="/about">About Us</a>
                <a class="btn btn-link" href="/contact">Contact Us</a>
                <a class="btn btn-link" href="/services">Services</a>
                <a class="btn btn-link" href="/">Home</a>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <h5 class="text-light mb-4">Artikel</h5>
                <a class="btn btn-link" href="https://www.siloamhospitals.com/informasi-siloam/artikel/obat-batuk-alami">Siloam Hospital</a>
                <a class="btn btn-link" href="https://www.biofarma.co.id/id/artikel-kesehatan">Biofarma</a>
                <a class="btn btn-link" href="https://www.halodoc.com/artikel">Halodoc</a>
                <a class="btn btn-link" href="https://rsud.acehjayakab.go.id/berita/kategori/artikel-kesehatan">RSUD Teuku Umar</a>
            </div>
        </div>
    </div>    
</div>
