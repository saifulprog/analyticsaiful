<!-- Modal -->
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="staticBackdropLabel">Are you sure you want to delete file!</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('media/default/File Delete.png') }}" class="img-fluid" alt="">
        </div>
        <div class="modal-footer">
            <form action="{{ route('gallery.destroy',$sItem->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o"></i> Yes Delete Now</button>
            </form>
        </div>
      </div>
    </div>
  </div>