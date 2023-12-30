@extends('frontend/front-layouts.front-app')
@section('title') Analytic Saiful Works @endsection
@section('keyword') Analytic Saiful Works @endsection
@section('description') Analytic Saiful Works @endsection
@section('content')

<!-- Breadcrumb Start -->
<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-content">
        <h2>My Works</h2>
        <ul class="breadcrumb-content-list">
          <li><a href="{{ route('/') }}" title="Analytic Saiful Home">Home</a></li>
          <li>Some of My Works</li>
        </ul>
      </div>
    </div>
  </div>
<!-- Breadcrumb End -->


<!-- Projects Start -->
<div class="container-xxl py-6 pt-5" id="project">
    <div class="container">
        <div class="row g-5 mb-5 align-items-center wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-6">
                <h2 class="display-5 mb-0">My Works</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <ul class="list-inline mx-n3 mb-0" id="portfolio-flters">
                    <li class="mx-3 active" data-filter="*">All Projects</li>
                    <li class="mx-3" data-filter=".first">Development</li>
                    <li class="mx-3" data-filter=".second">Marketing</li>
                </ul>
            </div>
        </div>
        <div class="row g-4 portfolio-container wow fadeInUp" data-wow-delay="0.1s">
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Development/bdhomeland.png') }}" alt="bdhomeland" title="bdhomeland" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Development/bdhomeland-2.png') }}" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="http://bdhomeland.com" target="_blank" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Development/fragdeal.png') }}" alt="fragdeal" title="fragdeal" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ ('front-assets/portfolio/Development/fragdeal-2.png') }}" title="fragdeal" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="https://fragdeal.com" target="_blank" title="fragdeal" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Development/vortibd.png') }}" alt="vortibd" title="vortibd" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Development/vortibd-2.png') }}" title="vortibd" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="https://vortibd.com/" title="vortibd" target="_blank" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Google/google-ads.png') }}" alt="google ads" title="google ads" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Google/google-ads.png') }}" title="google ads" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#" title="google ads" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item first">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Google/google-ga4.png') }}" alt="google ga4" title="google ga4" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Google/google-ga4.png') }}" title="google ga4" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#" title="google ga4" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item second">
                <div class="portfolio-img rounded overflow-hidden">
                    <img class="img-fluid" src="{{ asset('front-assets/portfolio/Facebook/facebook-ads.png') }}" alt="facebook ads" title="facebook ads" loading="lazy">
                    <div class="portfolio-btn">
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="{{ asset('front-assets/portfolio/Facebook/facebook-ads.png') }}" data-lightbox="portfolio" title="facebook ads"><i class="fa fa-eye"></i></a>
                        <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="#" title="facebook ads" rel="nofollow"><i class="fa fa-link"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Projects End -->

@endsection