
<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2 mb-2">
  @permission('user-profile-create')
  <button class="btn btn-pill btn-outline-primary-2x btn-air-primary" type="button" data-bs-toggle="modal" data-bs-target="#createUser"><i class="fa fa-plus"></i> ADD USER</button>
  @endpermission
</div>

<div class="table-responsive">
  <table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Role</th>
        <th scope="col">Total Login</th>
        <th scope="col">Last login</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if(!empty($qUsers))
      @foreach($qUsers as $sUser)
      <tr>
        <th scope="row">{{ $loop->index + 1 }}</th>
        <td>{{ $sUser->name }}</td>
        <td>{{ $sUser->email }}</td>
        <td>{{ $sUser->role }}</td>
        <td>{{ $sUser->total_login }}</td>
        <td>{{ date('Y-m-d H:i:sa', strtotime($sUser->last_login)) }}</td>
        <td>
          @permission('user-profile-edit')
          <a href="" data-bs-toggle="modal" data-bs-target="#editUser{{ $sUser->id }}" title="Edit User"><i class="fa fa-edit fa-2x text-secondary"></i> </a>&nbsp;
          @endpermission

          @permission('user-profile-delete')
          <a href="" title="Delete User"> <i class="fa fa-trash-o fa-2x text-danger"></i></a>
          @endpermission
        </td>
      </tr>

      @includeIf('backend.acl.user.edit-user')
      
      @endforeach
      @endif
    </tbody>
  </table>
  <br>
  @if(!empty($qUsers))
  <nav aria-label="Page navigation example">
    <ul class="pagination pagination-primary">
      {{ $qUsers->links() }}
    </ul>
  </nav>
  @endif
</div>


@includeIf('backend.acl.user.create-user')