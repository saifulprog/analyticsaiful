<!-- The Create Modal -->
<div class="modal fade" tabindex="-1" id="editModule{{ $sModule->id }}" aria-labelledby="editModule{{ $sModule->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Module</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{url('modules',$sModule->id)}}" enctype="multipart/form-data">
          @method('PUT')@csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="pwd">Module Name <span class="text-danger">*</span></label>
              <input type="text" name="txtModuleNameEn" value="{{$sModule->name}}" class="form-control" placeholder="Module Name" required autofocus maxlength="69">
              @if ($errors->has('txtModuleNameEn'))
                <span class="help-block text-danger">
                 <strong>{{ $errors->first('txtModuleNameEn') }}</strong>
                </span>
              @endif
            </div>
          </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Update</i></button>
          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</i></button>
        </div>
        </form>
      </div>
    </div>
  </div>