@extends('frontend.layouts.template')

@section('content')
  <section id="hero" class="hero section light-background">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-md-start">
          <h2>CREATING WEBSITES THAT MAKE YOU STOP & STARE</h2>
          <p>We are team of talented designers making websites with Bootstrap</p>
          <div class="d-flex mt-4 justify-content-center justify-content-md-start">
            <a href="#about" class="cta-btn">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>

  @endsection