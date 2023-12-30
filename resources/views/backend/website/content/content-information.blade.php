@extends('layouts.app')
@section('title') Content Information @endsection
@section('breadcrumb') Website / Content Information @endsection
@section('content')


<div class="col-sm-12 col-xl-12 xl-100">
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark ribbon-primary">
        All Content Information
        </div>
        
        <div class="card-body">

            <div class="card-block row">
                <div class="col">
                    <button type="button" class="btn btn-outline-warning mb-1 pull-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <i class="fa fa-search-plus"> Search</i>
                    </button>

                    @permission('content-information-create')
                    <button type="button" class="btn btn-outline-primary mb-1 pull-right" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRights" aria-controls="offcanvasRights"><i class="fa fa-plus"></i> Add New</button>
                    @endpermission
                </div>

                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Category / Title  </th>
                                <th scope="col">Type</th>
                                <th scope="col">Publish</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($qItems as $sItem)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <td>
                                    @if($sItem->content_type==1)
                                        @if(!empty($sItem->small_img_path))
                                        <img src="{{ asset($sItem->small_img_path) }}" class="img-fluid" width="200" alt="">
                                        @else
                                        <img src="{{ asset('media/default/Content-Image.png') }}" class="img-fluid" width="200" alt="">
                                        @endif
                                    @elseif($sItem->content_type==2)
                                    <img src="{{ 'media/default/PDF.png' }}" class="img-fluid" width="200" alt="">
                                    @elseif($sItem->content_type==3)
                                    <img src="{{ 'media/default/Video-Content.png' }}" class="img-fluid" width="200" alt="">
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $sItem->cat_name }}</strong>
                                    <br>
                                    {{ $sItem->eng_title }}
                                    <br>
                                    {{ $sItem->bng_title }}
                                    <br>
                                    <div class="bg-light p-2">
                                    <i class="fa fa-calendar"> Publish Date : {{ date('d M, Y', strtotime($sItem->created_at)); }}</i> | <i class="fa fa-calendar"> Last Update : {{ date('d M, Y', strtotime($sItem->updated_at)); }}</i>
                                    <br>
                                    <i class="fa fa-user"> Created By : {{ $sItem->createdBy }} </i> | <i class="fa fa-user"> Updated By : {{ $sItem->updatedBy }} </i>
                                    </div>
                                </td>
                                <td class="pt-4">
                                    @if($sItem->content_type==1)
                                    <i class="fa fa-file-text-o fa-lg"></i>
                                    @elseif($sItem->content_type==2)
                                    <i class="fa fa-file-pdf-o fa-lg"></i>
                                    @elseif($sItem->content_type==3)
                                    <i class="fa fa-file-movie-o fa-lg"></i>
                                    @endif
                                </td>
                                <td class="pt-4">
                                    @if($sItem->publish==1)
                                    <i data-feather="check-circle" class="text-success"></i>
                                    @elseif($sItem->publish==0)
                                    <i data-feather="x-circle" class="text-danger"></i>
                                    @endif
                                </td>
                                <td class="pt-4">
                                    @permission('content-information-edit')
                                    <a href="{{ route('content-information.edit',$sItem->id) }}" class="btn btn-outline-secondary btn-sm mb-1"><i class="fa fa-pencil fa-lg"></i> Edit&nbsp;&nbsp;&nbsp;</a><br>
                                    
                                    <button class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#imageUrl{{ $sItem->id }}"> <i class="fa fa-image fa-lg"> </i> Image</button>
                                    @include('backend.website.content.partials.image-url-modal')
                                    @endpermission
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @if(!empty($qItems))
                        {{ $qItems->links() }}
                        @endif
                    </div>
                </div>
            </div>        
        </div>
    </div>
</div>

@include('backend.website.content.partials.content-offcanvas')
@include('backend.website.content.partials.search-modal')

@endsection