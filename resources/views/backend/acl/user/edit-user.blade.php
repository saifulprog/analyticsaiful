<!-- The Create Modal -->
<div class="modal fade" tabindex="-1" id="editUser{{ $sUser->id }}" aria-labelledby="editUser{{ $sUser->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{url('admin-users',$sUser->id)}}" enctype="multipart/form-data">
          @method('PUT')@csrf
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Full Name <strong class="text-danger">*</strong></label>
                  <input type="text" name="txtName" value="{{ $sUser->name }}" class="form-control" placeholder="Full Name" required autofocus maxlength="69">
    
                  @if ($errors->has('txtName'))
                    <span class="help-block text-danger">
                     <strong>{{ $errors->first('txtName') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>

            <div class="row">    
              <div class="col-sm-12">
                <div class="form-group">
                  <label>Mobile <strong class="text-danger">*</strong></label>
                  <input type="number" name="txtMobile" value="{{ $sUser->mobile }}" class="form-control" placeholder="Mobile"  maxlength="11">
    
                  @if ($errors->has('txtMobile'))
                    <span class="help-block text-danger">
                     <strong>{{ $errors->first('txtMobile') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
    
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>User Role <strong class="text-danger">*</strong></label>
                  <select class="form-control" name="cmbRole" required>
                    <option value="">Select Role</option>
                    @foreach($qRoles as $sRole)
                    <option value="{{$sRole->id}}" @if($sUser->role_id==$sRole->id) @selected(true)@endif>{{$sRole->name}}</option>
                    @endforeach
                  </select>
    
                  @if ($errors->has('cmbRole'))
                    <span class="help-block text-danger">
                     <strong>{{ $errors->first('cmbRole') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
    
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Password </label>
                  <input type="password" name="txtPassword" class="form-control" placeholder="Password" minlength="8">
                  <input type="hidden" name="txtOldPassword" value="{{ $sUser->password }}">

                  @if ($errors->has('txtPassword'))
                    <span class="help-block text-danger">
                     <strong>{{ $errors->first('txtPassword') }}</strong>
                    </span>
                  @endif
                </div>
              </div>
            </div>
    
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Profile Picture</label>
                  <input type="file" id="filProfile" name="filProfile" class="form-control" data-max-size="1024" accept=".jpeg, .jpg, .png" onchange="document.getElementById('picture').src = window.URL.createObjectURL(this.files[0])">
                  <input type="hidden" name="txtOldFilePath" value="{{ $sUser->file_path }}">
                </div>
              </div>
    
              <div class="col-sm-6">
                <div class="form-group">
                  <img src="{{ asset(!empty($sUser->file_path)?$sUser->file_path:'media/profile/1.png')}}" id="picture" alt="your image" width="100" height="100"/>
                </div>
              </div>
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