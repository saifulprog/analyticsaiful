@extends('frontend/front-layouts.front-app')
@section('title'){{ $sMetaInfo->meta_eng_title??'' }}@endsection
@section('keyword'){{ $sMetaInfo->cat_meta_keyword??'' }}@endsection
@section('description'){{ $sMetaInfo->cat_meta_description??'' }}@endsection
@section('content')

<!-- Breadcrumb Start -->
<div class="breadcrumb">
    <div class="container">
      <div class="breadcrumb-content">
        <h2>Blog</h2>
        <ul class="breadcrumb-content-list">
          <li><a href="{{ route('/') }}" title="Analytic Saiful Home">Home</a></li>
          <li>Blog</li>
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
                @foreach($qItems as $sItem)
                <div class="row single-blog mb-3">
                    <div class="col-sm-5">
                        <img class="img-fluid" src="{{ asset($sItem->small_img_path) }}" alt="{{ $sItem->eng_title }}" title="{{ $sItem->eng_title }}" loading="lazy">
                    </div>
                    <div class="col-sm-7">
                        <div class="pt-2">
                            <h4 class="">{{ $sItem->eng_title }}</h4>

                            <small class="text-secondary">{{ date('d M, Y', strtotime($sItem->created_at)) }} | {{ $sItem->cat_name }} | {{ $sItem->total_hits }} views</small>

                            <p>{{ $sItem->eng_brief }}</p>

                            <a href="{{ url('blog-details',$sItem->en_slug) }}" class="btn btn-outline-primary btn-sm" title="{{ $sItem->eng_title }}">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                @if(!empty($qItems))
                    {{ $qItems->links() }}
                @endif
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
                        <img class="img-fluid" src="{{ asset($sPopular->small_img_path) }}" alt="{{ $sPopular->eng_title }}" title="{{ $sPopular->eng_title }}" loading="lazy">
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