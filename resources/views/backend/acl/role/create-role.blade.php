<!-- The Create Modal -->
<div class="modal fade" tabindex="-1" id="createRole" aria-labelledby="createRole" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Create New Role</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" action="{{url('roles')}}" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">
        <div class="form-group">
          <label for="name">Role Name</label>
          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $role->name ?? old('name') }}" required autocomplete="name" autofocus>

          @error('name')
          <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
          </span>
          @enderror
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