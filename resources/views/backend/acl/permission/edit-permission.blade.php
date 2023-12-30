<!-- The Create Modal -->
<div class="modal fade" tabindex="-1" id="editPermission{{ $sPermission->id }}" aria-labelledby="editPermission{{ $sPermission->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit Role</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{url('permission',$sPermission->id)}}" enctype="multipart/form-data">
          @method('PUT')@csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="sModule">sModule</label>
              <select id="sModule" name="cmbModule" class="form-control @error('sModule') is-invalid @enderror roleSelect" required autofocus>
                  @foreach ($qModules as $sModule)
                   <option value="{{ $sModule->id}}" @if($sModule->id==$sPermission->sModule_id) selected @endif>{{ $sModule->name}}</option>
                  @endforeach
              </select>
              @if ($errors->has('cmbModule'))
                <span class="help-block text-danger">
                 <strong>{{ $errors->first('cmbModule') }}</strong>
                </span>
              @endif
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <select class="form-control @error('name') is-invalid @enderror" name="txtName" autofocus required>
                  <option value="">Select Permission</option>
                  <option value="index" @if($sPermission->comment=='index') selected @endif>Show</option>
                  <option value="store" @if($sPermission->comment=='store') selected @endif>Create</option>
                  <option value="update" @if($sPermission->comment=='update') selected @endif>Edit</option>
                  <option value="destroy" @if($sPermission->comment=='destroy') selected @endif>Delete</option>
                </select>

                @if ($errors->has('txtName'))
                  <span class="help-block text-danger">
                  <strong>{{ $errors->first('txtName') }}</strong>
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