<div class="modal fade" id="exampleModal" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="{{route('content-category.store')}}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">Parent Category</label>
                    <select name="cmbParentID" id="cmbParentID" class="form-control @error('cmbParentID') is-invalid @enderror"  autofocus>
                        <option value="0">N/A</option>
                        @if(!empty($qParentCategorys))
                        @foreach($qParentCategorys as $sParentCategory)
                        <option value="{{ $sParentCategory->id }}">{{ $sParentCategory->cat_name }}</option>
                        @endforeach
                        @endif
                    </select>
          
                    @error('cmbParentID')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="txtCatName">Category Name (Total characters : <small id="count"></small>)</label>
                    <input id="txtCatName" type="text" name="txtCatName" class="form-control @error('txtCatName') is-invalid @enderror" onkeyup="sync()" required>
          
                    @error('txtCatName')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="txtSLUG">SLUG</label>
                    <input id="txtSLUG" type="text" name="txtSLUG" class="form-control @error('name') is-invalid @enderror" name="name" required>
          
                    @error('txtSLUG')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="txtTitle">Meta Title</label>
                    <input id="txtTitle" type="text" class="form-control @error('txtTitle') is-invalid @enderror" name="txtTitle" value="{{ $role->txtTitle ?? old('txtTitle') }}" maxlength="60" required>
          
                    @error('txtTitle')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="txtKeyword">Meta Keyword</label>
                <textarea name="txtKeyword" rows="3" class="form-control @error('txtKeyword') is-invalid @enderror" value="{{ $role->txtKeyword ?? old('txtKeyword') }}" maxlength="255"></textarea>
                
                @error('txtKeyword')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="txtDescription">Meta Description</label>
                <textarea name="txtDescription" rows="3" class="form-control @error('txtDescription') is-invalid @enderror" value="{{ $role->txtDescription ?? old('txtDescription') }}" maxlength="160"></textarea>
                
                @error('txtDescription')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label class="col-form-label pt-0">Big Image Width</label>
                    <input type="number" name="txtBigWidth" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-2">
                    <label class="col-form-label pt-0">Big Image Height</label>
                    <input type="number" name="txtBigHeight" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Small Image Width</label>
                    <input type="number" name="txtSmallWidth" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Small Image Height</label>
                    <input type="number" name="txtSmallHeight" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-2">
                    <label class="col-form-label pt-0">Category Serial</label>
                    <input type="number" name="txtSerial" class="form-control" placeholder="00">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Content Type</label>
                    <select name="cmbContentType" class="form-control" required>
                        <option value="0">N/A</option>
                        <option value="1">Text</option>
                        <option value="2">PDF/Doc</option>
                        <option value="3">Video</option>
                    </select>
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Is Parent</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkIsParent" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Multiple Items</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkMultipleItems" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Publish</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkPublish" checked value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Save</i></button>
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Cancel</i></button>
        </div>
        </form> 
      </div>
    </div>
  </div>