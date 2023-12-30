<div class="modal fade" id="editModal{{ $sItem->id }}" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form method="post" action="{{route('content-category.update',$sItem->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">
            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="name">Parent Category</label>
                    <select name="cmbParentID" id="cmbParentID" class="form-control @error('cmbParentID') is-invalid @enderror"  autofocus>
                        <option value="0" @if($sItem->parent_id==0) selected @endif>N/A</option>
                        @if(!empty($qParentCategorys))
                        @foreach($qParentCategorys as $sParentCategory)
                        <option value="{{ $sParentCategory->id }}" @if($sItem->parent_id==$sParentCategory->id) selected @endif>{{ $sParentCategory->cat_name }}</option>
                        @endforeach
                        @endif
                    </select>
          
                    @error('cmbParentID')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="txtCatName">Category Name (Total characters : <small id="count"></small>)</label>
                    <input type="text" name="txtCatName" value="{{ $sItem->cat_name }}" class="form-control @error('txtCatName') is-invalid @enderror" onkeyup="sync()" required>
          
                    @error('txtCatName')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 form-group">
                    <label for="txtSLUG">SLUG</label>
                    <input id="txtSLUG" type="text" name="txtSLUG" value="{{ $sItem->cat_slug }}" class="form-control @error('name') is-invalid @enderror" name="name" required>
          
                    @error('txtSLUG')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="col-sm-6 form-group">
                    <label for="txtTitle">Meta Title</label>
                    <input id="txtTitle" type="text" value="{{ $sItem->cat_meta_title }}" class="form-control @error('txtTitle') is-invalid @enderror" name="txtTitle"  maxlength="60" required>
          
                    @error('txtTitle')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="txtKeyword">Meta Keyword</label>
                <textarea name="txtKeyword" rows="3" class="form-control @error('txtKeyword') is-invalid @enderror"  maxlength="255">{{ $sItem->cat_meta_keyword }}</textarea>
                
                @error('txtKeyword')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="txtDescription">Meta Description</label>
                <textarea name="txtDescription" rows="3" class="form-control @error('txtDescription') is-invalid @enderror"  maxlength="160">{{ $sItem->cat_meta_description }}</textarea>
                
                @error('txtDescription')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group row">
                <div class="col-sm-2">
                    <label class="col-form-label pt-0">Big Image Width</label>
                    <input type="number" name="txtBigWidth" value="{{ $sItem->big_img_width }}" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-2">
                    <label class="col-form-label pt-0">Big Image Height</label>
                    <input type="number" name="txtBigHeight" value="{{ $sItem->big_img_height }}" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Small Image Width</label>
                    <input type="number" name="txtSmallWidth" value="{{ $sItem->small_img_width }}" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Small Image Height</label>
                    <input type="number" name="txtSmallHeight" value="{{ $sItem->small_img_height }}" class="form-control" placeholder="00">
                </div>

                <div class="col-sm-2">
                    <label class="col-form-label pt-0">Category Serial</label>
                    <input type="number" name="txtSerial" value="{{ $sItem->cat_serial }}" class="form-control" placeholder="00">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Content Type</label>
                    <select name="cmbContentType" class="form-control">
                        <option value="0">N/A</option>
                        <option value="1" @if($sItem->content_type==1) selected @endif>Text</option>
                        <option value="2" @if($sItem->content_type==2) selected @endif>PDF/Doc</option>
                        <option value="3" @if($sItem->content_type==3) selected @endif>Video</option>
                    </select>
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Is Parent</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkIsParent" value="1" @if($sItem->is_parent==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Multiple Items</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkMultipleItems" value="1" @if($sItem->multiple_items==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-3">
                    <label class="col-form-label pt-0">Publish</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkPublish" checked value="1" @if($sItem->publish==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Update</i></button>
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Cancel</i></button>
        </div>
        </form> 
      </div>
    </div>
  </div>