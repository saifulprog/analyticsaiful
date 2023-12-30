
<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2 mb-2">
  @permission('role-create')
  <button class="btn btn-pill btn-outline-primary-2x btn-air-primary" type="button" data-bs-toggle="modal" data-bs-target="#createRole"><i class="fa fa-plus"></i> ADD ROLE</button>
  @endpermission
</div>

<div class="table-responsive">
  <table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th></th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if(!empty($qRoles))
      @foreach($qRoles as $sRole)
      <tr>
        <th scope="row">{{ $loop->index + 1 }}</th>
        <td>{{ $sRole->name }}</td>
        <td>
          @if($sRole->permissions->count() >0)
          <span class="badge rounded-pill badge-primary">{{ $sRole->permissions->count() }}</span>
          @else
          <span class="badge badge-warning badge-pill">No Permission Found</span>
          @endif
        </td>
        <td>{{ $sRole->created_at->diffForHumans() }}</td>
        <td>
          @permission('role-edit')
          <a href="" data-bs-toggle="modal" data-bs-target="#editRole{{ $sRole->id }}" title="Edit Permission"><i class="fa fa-edit fa-2x text-secondary"></i> </a>&nbsp;
          <a href="" data-bs-toggle="modal" data-bs-target="#assignRole{{ $sRole->id }}" title="Assign Permission"> <i class="fa fa-check-square-o fa-2x text-warning"></i></a>
          @endpermission
        </td>
      </tr>
     @includeIf('backend.acl.role.edit-role')
     @includeIf('backend.acl.role.assign-roles')
      @endforeach
      @endif
    </tbody>
  </table>
</div>


@includeIf('backend.acl.role.create-role')