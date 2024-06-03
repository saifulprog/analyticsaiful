@extends('backend.layouts.app')
@section('title') Content Information @endsection
@section('breadcrumb') Website / CreateContent Information @endsection
@section('content')


<div class="col-sm-12 col-xl-12 xl-100">
    <form method="POST" action="{{ route('content-information.update',$sItem->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
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
                            <input type="text" name="txtEngTitle" id="txtEngTitle" value="{{ $sItem->eng_title }}" class="form-control @error('txtEngTitle') is-invalid @enderror" value="{{ $role->txtEngTitle ?? old('txtEngTitle') }}" required maxlength="120" onkeyup="sync()">
                                                    
                            @error('txtEngTitle')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="name">Content English Brief <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                            <textarea class="form-control" name="txtEngBrief" rows="5" maxlength="255" required>{{ $sItem->eng_brief }}</textarea>
                                                    
                            @error('txtEngBrief')
                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>English Description </label>
                            <textarea class="ckeditor form-control" name="txtEngDesc">{{ $sItem->eng_details }}</textarea>
                        </div>
                    </div>                        
                  </div>

                  <div class="tab-pane fade" id="bangla" role="tabpanel" aria-labelledby="bangla-tab">
                    <div class="form-group">
                        <label for="name">Content Bangla Title <small class="text-secondary">(Please write a title under 120 characters)</small></label>
                        <input type="text" name="txtBngTitle" id="txtBngTitle" value="{{ $sItem->bng_title }}" class="form-control @error('txtBngTitle') is-invalid @enderror" value="{{ $role->txtBngTitle ?? old('txtBngTitle') }}" maxlength="120" onkeydown="sync()">
                                                
                        @error('txtBngTitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Content Bangla Brief <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtBngBrief" rows="5" maxlength="255">{{ $sItem->bng_brief }}</textarea>
                                                
                        @error('txtBngBrief')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Bangla Description </label>
                        <textarea class="ckeditor form-control" name="txtBngDesc">{{ $sItem->bng_details }}</textarea>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="seo" role="tabpanel" aria-labelledby="seo-tab">
                    <div class="form-group">
                        <label>English Meta Title <small class="text-secondary">(Please write a title under 60 characters)</small></label>
                        <input type="text" name="txtEngMetaTitle" value="{{ $sItem->meta_eng_title }}" id="txtEngMetaTitle" class="form-control @error('txtEngMetaTitle') is-invalid @enderror" value="{{ $role->txtEngMetaTitle ?? old('txtEngMetaTitle') }}" maxlength="60">

                        @error('txtBngMetaTitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                        
                        <input type="text" name="txtEngSlug" value="{{ $sItem->en_slug }}" id="txtEngSlug" class="mt-1 form-control @error('txtEngMetaTitle') is-invalid @enderror" value="{{ $role->txtEngSlug ?? old('txtEngSlug') }}" placeholder="Slug">
                                                
                        @error('txtEngSlug')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Bangla Meta Title <small class="text-secondary">(Please write a title under 60 characters)</small></label>
                        <input type="text" name="txtBngMetaTitle" value="{{ $sItem->meta_bng_title }}" id="txtBngMetaTitle" class="form-control @error('txtBngMetaTitle') is-invalid @enderror" maxlength="60">

                        @error('txtBngMetaTitle')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror

                        <input type="text" name="txtBngSlug" value="{{ $sItem->bn_slug }}" id="txtBngSlug" class="mt-1 form-control @error('txtBngMetaTitle') is-invalid @enderror" placeholder="Slug">
                                                
                        @error('txtBngSlug')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">English Meta Keyword <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtEngMetaKeyword" rows="3" maxlength="255">{{ $sItem->meta_eng_keyword }}</textarea>
                                                
                        @error('txtEngMetaKeyword')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Bangla Meta Keyword <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtBngMetaKeyword" rows="3" maxlength="255">{{ $sItem->meta_bng_keyword }}</textarea>
                                                
                        @error('txtBngMetaKeyword')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">English Meta Description <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtEngMetaDescription" rows="3" maxlength="255">{{ $sItem->meta_eng_desc }}</textarea>
                                                
                        @error('txtEngMetaDescription')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Bangla Meta Description <small class="text-secondary">(Please write a title under 255 characters)</small></label>
                        <textarea class="form-control" name="txtBngMetaDescription" rows="3" maxlength="255">{{ $sItem->meta_bng_desc }}</textarea>
                                                
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
                        <select name="cmbCatID" class="form-control">
                            @foreach ($qCats as $sCat)
                            <option value="{{ $sCat->id }}" @if($sItem->cat_id==$sCat->id) @selected(true) @endif>{{ $sCat->cat_name }}</option>
                            @endforeach
                        </select>
              
                        @error('cmbCatID')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="name">Video ID <small class="text-danger">(Only Youtube video id)</small></label>
                        <input type="text" name="txtVideoID" value="{{ $sItem->video_id }}" class="form-control" @error('txtVideoID') is-invalid @enderror" value="{{ $role->txtVideoID ?? old('txtVideoID') }}" maxlength="69">

                        @error('txtVideoID')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>

                    @if($qCategorys->content_type==1)
                    <div class="form-group">
                        <label for="name">Image <small class="text-danger">(Image type .JPEG,.JPG,.PNG and File Size-1mb)</small></label>
                        <input type="file" name="fImage" class="form-control" accept=".jpeg, .jpg, .png" onchange="document.getElementById('picture').src = window.URL.createObjectURL(this.files[0])">
                        
                        <input type="hidden" name="fBigImage" class="form-control" value="{{ $sItem->big_img_path }}">
                        <input type="hidden" name="fSmallImage" class="form-control" value="{{ $sItem->small_img_path }}">

                        @error('fImage')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    @elseif($qCategorys->content_type==2)
                    <div class="form-group">
                        <label for="name">PDF <small class="text-danger">(.PDF file only)</small></label>
                        <input type="file" name="fPDF" class="form-control" @error('fPDF') is-invalid @enderror" value="{{ $role->fPDF ?? old('fPDF') }}" accept=".pdf">
                        
                        <input type="hidden" name="hPDF" class="form-control" value="{{ $sItem->file_path }}">

                        @error('fPDF')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    @endif

                    <div class="form-group">
                        @if(!empty($sItem->big_img_path))
                        <img src="{{ asset($sItem->big_img_path)}}" id="picture" alt="your image" width="100%" height="250"/>
                        @else
                        <img src="{{ asset('media/default/Example.jpg')}}" id="picture" alt="your image" width="100%" height="250"/>
                        @endif
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-12">
                            <label class="col-form-label pt-0">Publish</label>
                            <div class="media-body icon-state switch-outline">
                                <label class="switch">
                                  <input type="checkbox" name="chkPublish" @if($sItem->publish==1) checked @endif value="1"><span class="switch-state bg-primary"></span>
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-4">
                            <div class="row">
                                <div class="col-sm-6 d-grid">
                                    <button type="submit" class="btn btn-outline-success d-flax"><i class="fa fa-check fa-lg"></i> Update</i></button>
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