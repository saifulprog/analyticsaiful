@extends('layouts.app')
@section('title') Content Category @endsection
@section('breadcrumb') Website / Content Category @endsection
@section('content')


<div class="row">
    <div class="col-sm-12 col-xl-12 xl-50">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark ribbon-primary">
            New Content Category
            </div>
            
            <div class="card-body row">
                <div class="col-sm-12">
                    @permission('content-category-create')
                    <button type="button" class="btn btn-outline-primary mb-1 pull-right" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="fa fa-plus"></i> Add Category</button>
                    @endpermission
                </div>

                <div class="col-sm-12">
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Parent</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category Type</th>
                            <th scope="col">Multiple Type</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($qItems as $sItem)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <th scope="row">
                                    @if($sItem->is_parent==1 || $sItem->parent_id==0)
                                    {{ $sItem->cat_name }}
                                    @else
                                    <i class="fa fa-long-arrow-right"></i>
                                    @endif
                                </th>
                                <th scope="row">
                                    @if($sItem->is_parent==0)
                                    <span class="text-secondary">{{ $sItem->cat_name }}</span>
                                    @else
                                    <i class="fa fa-level-down"></i>
                                    @endif
                                </th>
                                <th scope="row">
                                    @if($sItem->is_parent==0 && $sItem->content_type==1)
                                    <i class="fa fa-file-text-o fa-lg"></i>
                                    @elseif($sItem->is_parent==0 && $sItem->content_type==2)
                                    <i class="fa fa-file-pdf-o fa-lg"></i>
                                    @elseif($sItem->is_parent==0 && $sItem->content_type==3)
                                    <i class="fa fa-file-movie-o fa-lg"></i>
                                    @else
                                    <i class="fa fa-arrows-h"></i>
                                    @endif
                                </th>
                                <th scope="row">
                                    @if($sItem->is_parent==0)
                                    {{ $sItem->multiple_items==1?'Yes':'No' }}
                                    @else
                                    <i class="fa fa-arrows-h"></i>
                                    @endif
                                </th>
                                <th scope="row">
                                    @permission('content-category-edit')
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $sItem->id }}" data-bs-whatever="@mdo"><i class="fa fa-pencil fa-lg"></i> Edit</button>
                                    @endpermission
                                </th>
                            </tr>

                            @include('backend.website.category.partials.edit-category')

                            @endforeach
                        </tbody>
                    </table>    
                </div>         
            </div>
        </div>
    </div>

</div>

@include('backend.website.category.partials.create-category')

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