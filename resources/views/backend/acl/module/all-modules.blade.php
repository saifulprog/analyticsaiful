
<div class="d-grid gap-2 d-md-flex justify-content-md-end mt-2 mb-2">
  @permission('module-create')
  <button class="btn btn-pill btn-outline-primary-2x btn-air-primary" type="button" data-bs-toggle="modal" data-bs-target="#createModule"><i class="fa fa-plus"></i> ADD MODULE</button>
  @endpermission
</div>

<div class="table-responsive">
  <table class="table">
    <thead class="table-primary">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Created At</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @if(!empty($qModules))
      @foreach($qModules as $sModule)
      <tr>
        <th scope="row">{{ $loop->index + 1 }}</th>
        <td>{{ $sModule->name }}</td>
        <td>{{ $sModule->created_at->diffForHumans() }}</td>
        <td>
          @permission('module-edit')
          <a href="" data-bs-toggle="modal" data-bs-target="#editModule{{ $sModule->id }}" title="Edit Module"><i class="fa fa-edit fa-2x text-secondary"></i> </a>&nbsp;
          @endpermission
        </td>
      </tr>
      @includeIf('backend.acl.module.edit-module')
      @endforeach
      @endif
    </tbody>
  </table>
</div>


@includeIf('backend.acl.module.create-module')