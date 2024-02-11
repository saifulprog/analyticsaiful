@extends('backend.layouts.app')
@section('title') Message Template @endsection
@section('breadcrumb') Marketing / Message Template @endsection
@section('content')

<div class="col-sm-12 col-xl-12 xl-100">
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark ribbon-primary">
            Message Template Information
        </div>
        
        <div class="card-body">

            <div class="card-block row">
                <div class="col-sm-10">
                    <button type="button" class="btn btn-outline-warning ml-2 mb-1" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <i class="fa fa-search-plus"> Search</i>
                    </button>
                </div>
                <div class="col-sm-2">
                    <button type="button" class="btn btn-outline-primary mb-1 pull-right" data-bs-toggle="modal" data-bs-target="#createModal"><i class="fa fa-plus"></i> Add New</button>
                </div>

                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Publish</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($qItems as $sItem)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <th scope="row">{{ $sItem->title }}</th>
                                <th scope="row">{{ $sItem->subject }}</th>
                                <th scope="row">{{ $sItem->publish==1?'Yes':'No' }}</th>
                                <td scope="row">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal{{ $sItem->id }}"><i class="fa fa-pencil fa-lg"></i> </a>
                                </td>
                            </tr>
                            @include('backend/marketing/message-template/edit-message-modal')
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

@include('backend/marketing/message-template/create-message-modal')

@endsection