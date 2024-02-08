<div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Create Message</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('message-template.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">

            <div class="row mb-2">
                <div class="col-sm-10">
                    <label class="text-secondary">Title</label>
                    <input type="text" name="txtTitle" class="form-control" max="255" required>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Publish</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                            <input type="checkbox" name="chkPublish" checked value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12 mb-2">
                    <label class="text-secondary">Subject</label>
                    <input type="text" name="txtSubject" class="form-control" max="255" required>
                </div>

                <div class="col-sm-12">
                    <label class="text-secondary">Message</label>
                    <textarea name="txtMessage" class="ckeditor form-control" id="text-box" required></textarea>
                </div>
            </div>            
            
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</button>
            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-check fa-lg"></i> Save</button>
        </div>
        </form>

        </div>
    </div>
</div>