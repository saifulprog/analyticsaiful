@extends('layouts.app')
@section('title') Content Information @endsection
@section('breadcrumb') Website / CreateContent Information @endsection
@section('content')


<div class="col-sm-12 col-xl-12 xl-100">
    <form method="POST" action="{{ url('/content-information') }}" enctype="multipart/form-data">
        @csrf
    <div class="row">
        <div class="col-sm-8 col-xl-8 xl-100">
            <div class="card">
              <div class="card-body">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="english-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">English Content</a></li>
                  <li class="nav-item"><a class="nav-link" id="bangla-tab" data-bs-toggle="tab" href="#bangla" role="tab" aria-controls="contact" aria-selected="false">Bangla Content</a></li>
                  <li class="nav-item"><a class="nav-link" id="seo-tab" data-bs-toggle="tab" href="#seo" role="tab" aria-controls="contact" aria-selected="false">SEO</a></li>
                </ul>

                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="english-tab">
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Content English Title <small class="warning-icon">*</small> <small class="text-secondary">(Please write a title under 120 characters)</small> [Total:<small class="text-danger" id="count1">  </small>characters]</label>
                            <input type="text" name="txtEngTitle" id="txtEngTitle" class="form-control @error('txtEngTitle') is-invalid @enderror" value="{{ $role->txtEngTitle ?? old('txtEngTitle') }}" required maxlength="120" onkeyup="sync()">
                                                    
                            @error('txtEngTitle')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Content English Brief <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                            <textarea class="form-control" name="txtEngBrief" rows="5" maxlength="255"></textarea>
                                                    
                            @error('txtEngBrief')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>English Description </label>
                            <textarea class="ckeditor form-control" name="txtEngDesc"></textarea>
                        </div>
                    </div>                        
                  </div>

                  <div class="tab-pane fade" id="bangla" role="tabpanel" aria-labelledby="bangla-tab">
                    <div class="form-group">
                        <label for="name">Content Bangla Title <small class="text-secondary">(Please write a title under 120 characters)</small> [Total:<small class="text-danger" id="count2">  </small>characters]</label>
                        <input type="text" name="txtBngTitle" id="txtBngTitle" class="form-control @error('txtBngTitle') is-invalid @enderror" value="{{ $role->txtBngTitle ?? old('txtBngTitle') }}" maxlength="120" onkeyup="sync()">
                                                
                        @error('txtBngTitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Content Bangla Brief <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtBngBrief" rows="5" maxlength="255"></textarea>
                                                
                        @error('txtBngBrief')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Bangla Description </label>
                        <textarea class="ckeditor form-control" name="txtBngDesc"></textarea>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="form-group">
                        <label>English Meta Title <small class="text-secondary">(Please write a title under 60 characters)</small></label>
                        <input type="text" name="txtEngMetaTitle" id="txtEngMetaTitle" class="form-control @error('txtEngMetaTitle') is-invalid @enderror" value="{{ $role->txtEngMetaTitle ?? old('txtEngMetaTitle') }}" maxlength="60">

                        @error('txtEngMetaTitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        
                        <input type="text" name="txtEngSlug" id="txtEngSlug" class="mt-1 form-control @error('txtEngMetaTitle') is-invalid @enderror" value="{{ $role->txtEngSlug ?? old('txtEngSlug') }}" placeholder="Slug">
                                                
                        @error('txtEngSlug')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Bangla Meta Title <small class="text-secondary">(Please write a title under 60 characters)</small></label>
                        <input type="text" name="txtBngMetaTitle" id="txtBngMetaTitle" class="form-control @error('txtBngMetaTitle') is-invalid @enderror" maxlength="60">

                        @error('txtBngMetaTitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                        <input type="text" name="txtBngSlug" id="txtBngSlug" class="mt-1 form-control @error('txtBngMetaTitle') is-invalid @enderror" placeholder="Slug">
                                                
                        @error('txtBngSlug')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">English Meta Keyword <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtEngMetaKeyword" rows="3" maxlength="255"></textarea>
                                                
                        @error('txtEngMetaKeyword')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Bangla Meta Keyword <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtBngMetaKeyword" rows="3" maxlength="255"></textarea>
                                                
                        @error('txtBngMetaKeyword')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">English Meta Description <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtEngMetaDescription" rows="3" maxlength="255"></textarea>
                                                
                        @error('txtEngMetaDescription')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Bangla Meta Description <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtBngMetaDescription" rows="3" maxlength="255"></textarea>
                                                
                        @error('txtBngMetaDescription')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-sm-4 col-xl-4 xl-100">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Content Category </label><small class="warning-icon">*</small>
                        
                        <input type="text" name="cmbCatIDShow" value="{{ $qCategorys->cat_name }}" id="exampleInputPassword22" disabled class="form-control">
                        <input type="hidden" name="cmbCatID" value="{{ $qCategorys->id }}" readonly required>
              
                        @error('cmbCatID')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Video ID <small class="text-danger">(Only Youtube video id)</small></label>
                        <input type="text" name="txtVideoID" class="form-control" @error('txtVideoID') is-invalid @enderror" value="{{ $role->txtVideoID ?? old('txtVideoID') }}" maxlength="69">

                        @error('txtVideoID')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    @if($qCategorys->content_type==1)
                    <div class="form-group">
                        <label for="name">Image <small class="text-danger">(Image type .JPEG,.JPG,.PNG and File Size-1mb)</small></label>
                        <input type="file" name="fImage" class="form-control" accept=".jpeg, .jpg, .png" onchange="document.getElementById('picture').src = window.URL.createObjectURL(this.files[0])">

                        @error('fImage')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    @elseif($qCategorys->content_type==2)
                    <div class="form-group">
                        <label for="name">PDF <small class="text-danger">(.PDF file only)</small></label>
                        <input type="file" name="fPDF" class="form-control" @error('fPDF') is-invalid @enderror" value="{{ $role->fPDF ?? old('fPDF') }}" accept=".pdf">

                        @error('fPDF')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    @endif

                    <div class="form-group">
                        <img src="{{ asset('media/default/Example.jpg')}}" id="picture" alt="your image" width="100%" height="250"/>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label class="col-form-label pt-0">Publish</label>
                            <div class="media-body icon-state switch-outline">
                                <label class="switch">
                                  <input type="checkbox" name="chkPublish" checked value="1"><span class="switch-state bg-primary"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-12 pt-4">
                            <div class="row">
                                <div class="col-sm-6 d-grid">
                                    <button type="submit" class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Save</i></button>
                                </div>
                                <div class="col-sm-6 d-grid">
                                    <a href="{{ url('content-information') }}" class="btn btn-outline-warning d-flax"><i class="fa fa-backward fa-lg"></i> Back</i></a>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });

    function sync()
    {
        var n1 = document.getElementById('txtEngTitle');
        var n2 = document.getElementById('txtEngSlug');
        var n3 = document.getElementById('txtEngMetaTitle');
        var counter1 = 0;

        n2.value = slugify(n1.value);
        n3.value = n1.value;
        counter1 = n2.value.length;
        document.getElementById("count1").innerHTML = counter1;

        var x1 = document.getElementById('txtBngTitle');
        var x2 = document.getElementById('txtBngSlug');
        var x3 = document.getElementById('txtBngMetaTitle');
        var counter2 = 0;

        x2.value = slugify(x1.value);
        x3.value = x1.value;
        counter2 = x2.value.length;
        document.getElementById("count2").innerHTML = counter2;
    }
</script>
@endsection