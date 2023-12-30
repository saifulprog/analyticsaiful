@extends('layouts.app')
@section('title') Show Gallery Image @endsection
@section('breadcrumb') Website / Gallery / Show Gallery Image @endsection
@section('content')


<div class="container-fluid">
    <div class="row">
        @permission('gallery-create')
        <div class="col d-grid gap-2"><button type="button" class="btn btn-outline-success mb-1 pull-right btn-cover" data-bs-toggle="modal" data-bs-target="#createModal" data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Add New</button></div>
        @endpermission
        <div class="col d-grid gap-2"><a href="{{ route('gallery-category.index') }}" class="btn btn-outline-warning mb-1 pull-right"><i class="fa fa-step-backward"></i> Back</a></div>
    </div>

    <div class="row">
      
      @foreach($qItems as $sItem)
      
      <div class="card col-sm-3" style="max-height:480px;">
        <div class="card-header p-0 pt-2">
          <img class="card-img-top" src="{{ asset($sItem->img_path) }}" alt="Card image cap">
        </div>
        
        <div class="card-body p-2">
            <h4>{{ $sItem->title?$sItem->title:'' }}</h4>
            <p>{{ $sItem->brief?$sItem->brief:'' }}</p>
        </div>
  
        <div class="card-body p-0 pb-2">
            @permission('gallery-delete')
            <button type="submit" class="btn btn-square btn-outline-danger btn-xs pull-right" data-bs-toggle="modal" data-bs-target="#deleteModal" data-bs-whatever="@mdo"><i class="fa fa-trash-o"></i> Delete</button>
            @endpermission
        </div>
      </div>

      @include('backend.website.gallery.partials.delete-image')

      @endforeach
      
    </div>
  </div>      
  
@include('backend.website.gallery.partials.create-gallery')

@endsection