<!-- The Create Modal -->
<div class="modal fade" tabindex="-1" id="createPermissions" aria-labelledby="createPermissions" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create New Permission</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="{{url('permission')}}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <label for="module">Module</label>
          <select id="module" name="cmbModule" class="form-control @error('module') is-invalid @enderror roleSelect" required autofocus>
              @foreach ($qModules as $sModule)
               <option value="{{ $sModule->id}}" @isset($sPermission){{($sPermission->module->id == $sModule->id) ? 'selected' : ''}}@endisset
                  >{{ $sModule->name}}</option>
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
              <option value="index">Show</option>
              <option value="store">Create</option>
              <option value="update">Edit</option>
              <option value="destroy">Delete</option>
            </select>
            @if ($errors->has('txtName'))
              <span class="help-block text-danger">
              <strong>{{ $errors->first('txtName') }}</strong>
              </span>
            @endif
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Save</i></button>
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</i></button>
      </div>
      </form>
    </div>
  </div>
</div>