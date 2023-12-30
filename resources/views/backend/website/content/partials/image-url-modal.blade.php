<!-- Modal -->
<div class="modal fade" id="imageUrl{{ $sItem->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="imageUrl{{ $sItem->id }}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="imageUrl{{ $sItem->id }}">Google Drive Image</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="{{ url('google-image-id-update', $sItem->id) }}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            <div class="form-group">
                <label for="name">Big Image ID</label>
                <input type="text" name="txtBigImgUrl" class="form-control" required>
            </div>

            <div class="form-group mt-3">
                <label for="name">Small Image ID</label>
                <input type="text" name="txtSmallImgUrl" class="form-control" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><i class="fa fa-times"></i> Close</button>
          <button type="submit" class="btn btn-outline-primary"><i class="fa fa-check"></i> Update</button>
        </div>
        </form>
      </div>
    </div>
  </div>