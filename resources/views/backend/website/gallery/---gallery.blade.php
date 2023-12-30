@extends('layouts.app')
@section('title') Gallery Information @endsection
@section('breadcrumb') Website / Gallery Information @endsection
@section('content')


<div class="col-sm-12 col-xl-12 xl-100">
    <div class="ribbon-wrapper card">
        <div class="ribbon ribbon-bookmark ribbon-primary">
         Gallery Information
        </div>
        
        <div class="card-body">
            <div class="card-block row">
                <div class="col">xxx
                    @permission('gallery-create')
                    <button type="button" class="btn btn-outline-primary mb-1" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Add New Item</button>
                    @endpermission
                    @permission('gallery-category-show')
                    <a href="{{ route('gallery-category.index') }}" class="btn btn-outline-primary pull-right" type="button"><i class="fa fa-plus"></i> Create Category</a>
                    @endpermission
                </div>

                <div class="col-sm-12 col-lg-12 col-xl-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="table-primary">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Type</th>
                                <th scope="col">Publish</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                                            
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



@endsection