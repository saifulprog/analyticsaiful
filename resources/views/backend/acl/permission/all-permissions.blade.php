
<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2 mb-2">
  @permission('permission-show')
  <button class="btn btn-pill btn-outline-primary-2x btn-air-primary" type="button" data-bs-toggle="modal" data-bs-target="#createPermissions"><i class="fa fa-plus"></i> ADD PERMISSION</button>
  @endpermission
</div>

<div class="table-responsive">
  <table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Module</th>
        <th scope="col">Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if(!empty($qPermissions))
      @foreach($qPermissions as $sPermission)
      <tr>
        <tr>
          <td>{{ $loop->index+1 }}</td>
          <td>{{ $sPermission->module->name }}</td>
          <td>{{ $sPermission->name }}</td>
          <td>{{ $sPermission->slug }}</td>
          <td>{{ $sPermission->created_at->diffForHumans() }}</td>
        <td>
          @permission('permission-edit')
          <a href="" data-bs-toggle="modal" data-bs-target="#editPermission{{ $sPermission->id }}" title="Edit Permission"><i class="fa fa-edit fa-2x text-secondary"></i> </a>&nbsp;
          @endpermission
        </td>
      </tr>
      @includeIf('backend.acl.permission.edit-permission')
      @endforeach
      @endif
    </tbody>
  </table>
  <br>
  @if(!empty($qPermissions))
  <nav aria-label="Page navigation example">
    <ul class="pagination pagination-primary">
      {{ $qPermissions->links() }}
    </ul>
  </nav>
  @endif

  
</div>


@includeIf('backend.acl.permission.create-permission')