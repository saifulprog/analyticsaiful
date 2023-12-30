@extends('layouts.app')
@section('title') Gallery Category @endsection
@section('breadcrumb') Website / Gallery / Gallery Category @endsection
@section('content')


<div class="row">
    <div class="col-sm-12 col-xl-12 xl-50">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark ribbon-primary">
            New Gallery Category
            </div>            

            <div class="card-body">
                <div class="card-block row">
                    <div class="col">
                        <button type="button" class="btn btn-outline-warning mb-1 pull-right" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fa fa-search-plus"> Search</i>
                        </button>
                        @permission('gallery-category-create')
                        <button type="button" class="btn btn-outline-primary mb-1 pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Add Category</button>
                        @endpermission
                    </div>

                    <div class="col-sm-12 col-lg-12 col-xl-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-primary">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Parent</th>
                                    <th scope="col">Title</th>
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
                                        @if(!empty($sItem->img_path))
                                        <img src="{{ url($sItem->img_path) }}" alt="" width="120" height="90">
                                        @else
                                        <img src="{{ asset('media/default/Upload-Image.png') }}" alt="" width="120" height="90">
                                        @endif
                                    </td>
                                    <td class="pt-4">
                                        @if($sItem->is_parent==0)
                                        No
                                        @elseif($sItem->is_parent==1)
                                        Yes
                                        @endif
                                    </td>
                                    <td>
                                        {{ $sItem->cat_name }}<br>
                                        {{ $sItem->cat_meta_description }}
                                    </td>
                                    <td class="pt-4">
                                        @if($sItem->type==1)
                                        <i class="fa fa-sliders fa-lg"></i>
                                        @elseif($sItem->type==2)
                                        <i class="fa fa-image fa-lg"></i>
                                        @elseif($sItem->type==3)
                                        <i class="fa fa-file-movie-o fa-lg"></i>
                                        @else
                                        <i class="fa fa-level-down"></i>
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
                                        @permission('gallery-category-edit')
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#editModal{{ $sItem->id }}" data-bs-whatever="@mdo" class="btn btn-outline-secondary btn-sm mb-1"><i class="fa fa-pencil fa-lg"></i> Edit Category &nbsp;&nbsp;</button><br>
                                        @if($sItem->type!==0)
                                        <a href="{{ route('gallery.show',$sItem->id) }}" class="btn btn-outline-primary btn-sm"> 
                                            @if($sItem->type==3)
                                            <i class="fa fa-youtube fa-lg"></i> Add Video's &nbsp;&nbsp;
                                            @elseif($sItem->type==1 || $sItem->type==2)
                                            <i class="fa fa-image fa-lg"></i> Add Image's &nbsp;
                                            @endif
                                        </a>
                                        @endif
                                        @endpermission
                                    </td>
                                </tr>

                                @include('backend.website.category.partials.edit-gallery-category')

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
</div>

@include('backend.website.category.partials.create-gallery-category')
@include('backend.website.category.partials.search-modal')

<script>
    function sync()
    {
        var n1 = document.getElementById('txtCatName');
        var n2 = document.getElementById('txtSLUG');
        var n3 = document.getElementById('txtTitle');
        var counter = 0;

        n2.value = slugify(n1.value);
        n3.value = n1.value;
        counter = n2.value.length;
        document.getElementById("count").innerHTML = counter;
    }
</script>
@endsection