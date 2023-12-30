<!-- The Create Modal -->
<div class="modal fade" tabindex="-1" id="assignRole{{ $sRole->id }}" aria-labelledby="assignRole{{ $sRole->id }}" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Manage Permission For Role</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="text-center">
        <input type="checkbox" class="custom-control-input" id="customCheck" onclick="toggle(this);">
        <label class="custom-control-label" for="customCheck">Select All</label>
      </div>

      <form method="post" action="{{ url('assign-permission', $sRole->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

            @php
              if(!empty($sRole->id)){
                $qRoles = DB::table('permission_role')->where('role_id',$sRole->id)->get();
              }
            @endphp

            @forelse ($qModules->chunk(6) as $key=>$chunks)
                <div class="row">
                    @foreach ($chunks as $sModule)
                        <div class="col-sm-4">
                        <h5><strong>{{ $sModule->name}}</strong></h5>
                        @foreach ($sModule->permissions as $permission)
                           <div class="text-secondary">
                               <div class="custom-control custom-checkbox mb-1">
                               <input type="checkbox" id="permission-{{$permission->id}}" name="permissions[]" value="{{$permission->id }}" @isset($qRoles)
                               @foreach($qRoles as $assignedPermission)
                                   {{ $permission->id == $assignedPermission->permission_id ? 'checked' : ''}}
                               @endforeach
                               @endisset>
                               <label for="permission-{{$permission->id}}" class="custom-control-label">{{$permission->name}}</label>
                               </div>
                           </div>
                        @endforeach
                        </div>
                    @endforeach
              </div>
              @empty
              <div class="row">
                  <div class="col text-center">
                      <strong>No Module Found</strong>
                  </div>
              </div>
            @endforelse

            
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Update</i></button>
        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</i></button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
  }
</script>