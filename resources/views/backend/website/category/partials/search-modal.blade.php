<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Search Item's</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="GET" action="{{ route('content-category.index') }}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Content Category</label>
                <select name="cmbCategory" class="form-control">
                    <option value="">Select Category</option>
                    @if(!empty($qCategorys))
                    @foreach($qCategorys as $sCategory)
                    <option value="{{ $sCategory->id }}">{{ $sCategory->cat_name }}</option>
                    @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="name">Content Title</label>
                <input type="text" name="txtTitle" class="form-control">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          <button type="submit" class="btn btn-outline-primary"><i class="fa fa-search"></i> Find</button>
        </div>
        </form>
      </div>
    </div>
  </div>