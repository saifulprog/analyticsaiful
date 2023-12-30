<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRights" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h5 id="offcanvasRightLabel">Content Category</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="col-sm-12 p-3">
        <a href="{{ route('content-category.index') }}" class="btn btn-outline-primary col-12" type="button"><i class="fa fa-plus"></i> Add New Category</a>
    </div>

    <div class="offcanvas-body">
      <div style="overflow-x:auto;">
        <table class="table">
          <thead class="table-secondary">
            <tr>
              <th scope="col">Menu</th>
              <th scope="col">Post</th>
            </tr>
          </thead>
          <tbody>
            @foreach($qCategorys as $sCategory)
            <tr @if($sCategory->is_parent==1) class="table-info" @endif>
              <th scope="row">
                @if($sCategory->is_parent==1)
                <i class="fa fa-gear"></i>
                @endif
                {{ $sCategory->cat_name }}
              </th>
              <td>
                @if($sCategory->is_parent == 0 && ($sCategory->count == 0))
                <a href="{{ route('content-information.show',$sCategory->id) }}" class="btn btn-square btn-outline-primary btn-xs"><i class="fa fa-pencil"></i> Go</a>
                @elseif(($sCategory->multiple_items == 1))
                <a href="{{ route('content-information.show',$sCategory->id) }}" class="btn btn-square btn-outline-primary btn-xs"><i class="fa fa-pencil"></i> Go</a>
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>    
    </div>
    
</div>


