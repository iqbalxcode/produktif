@extends('frontend.template')

@section('content')
<div class="row mt-4">
    <div class="col-md-6">
        <h2>Nama: {{ $nama ?? 'Tidak diketahui' }}</h2>
        <h3>Mata Pelajaran</h3>
        <ul class="list-group">
            @foreach($pelajaran ?? [] as $p)
                <li class="list-group-item">{{ $p }}</li>
            @endforeach
        </ul>
    </div>
    <div class="col-md-6 text-center">
        @if(file_exists(public_path('frontend/assets/img/hero-img.png')))
            <img src="{{ asset('frontend/assets/img/hero-img.png') }}" class="img-fluid rounded" alt="Ilustrasi">
        @else
            <div class="alert alert-info">Gambar ilustrasi tidak ditemukan.</div>
        @endif
    </div>
</div>
@endsection

@extends('frontend.template')

@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section light-background">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start" data-aos="fade-up">
                <h2>CREATING WEBSITES THAT MAKE YOU STOP &amp; STARE</h2>
                <p>We are team of talented designers making websites with Bootstrap</p>
                <div class="d-flex mt-4 justify-content-center justify-content-md-start">
                    <a href="#about" class="cta-btn">Get Started</a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                <img src="{{ asset('frontend/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 position-relative" data-aos="fade-up" data-aos-delay="100">
                <img src="{{ asset('frontend/assets/img/about.jpg') }}" class="img-fluid" alt="">
                <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox pulsating-play-btn"></a>
            </div>
            <div class="col-lg-6 ps-lg-4 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                <h3>About Us</h3>
                <p>Dolor iure expedita id fuga asperiores qui sunt consequatur minima...</p>
                <!-- ... (isi lainnya sesuai template) -->
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<!-- Salin semua section lainnya (Stats, Clients, Services, Portfolio, dll.) ke sini -->

@endsection