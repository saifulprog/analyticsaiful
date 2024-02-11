@extends('backend.layouts.app')
@section('title') Targeted Audience @endsection
@section('breadcrumb') Marketing / Targeted Audience @endsection
@section('content')


<div class="col-sm-12 col-xl-12 xl-100">
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark ribbon-primary">
        All Audience Information
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
                                <th scope="col">Organization</th>
                                <th scope="col">Email</th>
                                <th scope="col">WhatsApp</th>
                                <th scope="col">Type</th>
                                <th scope="col">Country</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($qItems as $sItem)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <th scope="row">{{ $sItem->organization }}</th>
                                <th scope="row">{{ $sItem->email }}</th>
                                <th scope="row">{{ $sItem->whats_app }}</th>
                                <th scope="row">{{ $sItem->type_name }}</th>
                                <th scope="row">{{ $sItem->country_name }}</th>
                                <td scope="row">
                                    <a href="" data-bs-toggle="modal" data-bs-target="#editModal{{ $sItem->id }}"><i class="fa fa-pencil fa-lg"></i> </a>
                                    <a href="" data-bs-toggle="modal" data-bs-target="#emailModal{{ $sItem->id }}"><i class="fa fa-envelope fa-lg"></i> </a>
                                </td>
                            </tr>
                            @include('backend/marketing/audience/send-email-modal')
                            @include('backend/marketing/audience/edit-audience-modal')
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

@include('backend/marketing/audience/create-audience-modal')
@include('backend/marketing/audience/search-audience')

@endsection