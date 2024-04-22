@extends('frontend/front-layouts.front-app')
@section('title'){{ $sItem->meta_eng_title??'' }}@endsection
@section('keyword'){{ $sItem->meta_eng_keyword??'' }}@endsection
@section('description'){{ $sItem->meta_eng_desc??'' }}@endsection
@section('content')

<!-- Breadcrumb Start -->
<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-content">
        <h2>Blog</h2>
        <ul class="breadcrumb-content-list">
          <li><a href="{{ url('blog/all-post') }}">Blog</a></li>
          <li>Details</li>
        </ul>
      </div>
    </div>
  </div>
<!-- Breadcrumb End -->


<!-- About Start -->
<div class="container-xxl py-6" id="about">
    <div class="container">
        <div class="row g-5">
            <div class="col-sm-9">
                <div class="row mb-3">
                    
                    <img class="img-fluid" src="{{ $sItem->big_img_path }}" alt="{{ $sItem->eng_title }}" title="{{ $sItem->eng_title }}" loading="lazy">
                    
                    <div class="blog-card-body pt-3">
                        <h1 class="blog-title">{{ $sItem->eng_title }}</h1>

                        <small class="text-secondary">{{ date('d M, Y', strtotime($sItem->created_at)) }} | {{ $sItem->cat_name }} | {{ $sItem->total_hits }} views</small>
                        <br><br>
                        @php
                            echo $sItem->eng_details;
                        @endphp
                        
                    </div>
                    
                </div>
            </div>

            <div class="col-sm-3">
               <h3>Categories</h3>
               <div class="col pt-3 mb-5">
                <ul class="categories">
                    @foreach($qCategorys as $sCategory)
                    <li>
                        <a href="{{ url('blog',$sCategory->cat_slug) }}" title="{{ $sCategory->cat_name }}">
                        {{ $sCategory->cat_name }} <span>({{ $sCategory->totalPost }})</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
               </div>

               <h2>Popular Articles</h2>
               <div class="col pt-3">
                    @foreach($qPopulars as $sPopular)
                    <div class="col mb-3">
                        <a href="{{ url('blog-details',$sPopular->en_slug) }}" title="{{ $sPopular->eng_title }}">
                        <img class="img-fluid" src="{{ asset($sPopular->small_img_path) }}" alt="{{ $sPopular->eng_title }}" title="{{ $sPopular->eng_title }}" loading="lazy" width="100%">
                        <h6>{{ $sPopular->eng_title }}</h6>
                        </a>
                    </div>
                    @endforeach
               </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

@endsection