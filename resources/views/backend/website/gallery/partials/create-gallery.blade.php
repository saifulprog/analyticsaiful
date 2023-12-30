<div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form method="post" action="{{route('gallery.store')}}" enctype="multipart/form-data">
          @csrf
      <div class="modal-body">
              <div class="row">
                  <div class="col-sm-6 form-group">
                      <label for="name">Category Group</label>
                      
                      <input type="text" name="cmbCategoryShow" value="{{ $sCategory->cat_name }}" id="" disabled class="form-control">
                      <input type="hidden" name="cmbCategoryID" value="{{ $sCategory->id }}" readonly required>
            
                      @error('cmbCategoryID')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                      @enderror
                  </div>

                  <div class="col-sm-6 form-group">
                      <label for="txtTitle">Title </label>
                      <input id="txtTitle" type="text" name="txtTitle" class="form-control @error('txtTitle') is-invalid @enderror">
                      <small class="text-success">Please input title under 99 character</small>

                      @error('txtTitle')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                      @enderror
                  </div>
              </div>

              <div class="form-group">
                <label for="txtBrief"> External Link</label>
                <input type="url" name="txtExternalLink" class="form-control @error('txtExternalLink') is-invalid @enderror" maxlength="255">
                <small class="text-success">Please input URL Link under 255 character</small>
                
                @error('txtExternalLink')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <div class="form-group">
                <label for="txtBrief"> Brief</label>
                <textarea name="txtBrief" rows="3" class="form-control @error('txtBrief') is-invalid @enderror" value="{{ $role->txtBrief ?? old('txtBrief') }}" maxlength="255"></textarea>
                <small class="text-success">Please input brief text under 255 character</small>

                @error('txtBrief')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>

              <div class="row">
                  @if($sCategory->type==1 || $sCategory->type==2)
                  <div class="col-sm-10 form-group">
                      <label for="name">Image <small class="text-danger">(Image type .JPEG,.JPG,.PNG and File Size-1mb)</small></label>
                      <input type="file" name="fImage[]" class="form-control" accept=".jpeg, .jpg, .png" onchange="document.getElementById('picture').src = window.URL.createObjectURL(this.files[0])" multiple>

                      @error('fImage')
                      <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                      @enderror
                  </div>
                  @elseif($sCategory->type==3) {{-- Video Item --}}
                  <div class="col-sm-10 form-group">
                    <label for="name">Video ID </label>
                    <input type="text" name="txtVideo" class="form-control">
                    <small class="text-success">Please input youtube video id under 255 character</small>

                    @error('txtVideo')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                  </div>
                  @endif

                  <div class="col-sm-2">
                    <label class="col-form-label pt-0">Publish</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkPublish" checked value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
              </div>

              @if($sCategory->type==1 || $sCategory->type==2)
              <div class="form-group">
                <img src="{{ asset('media/default/Example.jpg')}}" id="picture" alt="your image" height="350"/>
              </div>
              @endif
          
      </div>
      <div class="modal-footer">
          <button type="submit" class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Save</i></button>
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Cancel</i></button>
      </div>
      </form> 
    </div>
  </div>
</div>