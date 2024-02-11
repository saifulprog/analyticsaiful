<div class="modal fade" id="emailModal{{ $sItem->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Compose Email</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('singale-mail',$sItem->id) }}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">
            
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Write Message</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Message Template</button>
                </li>
            </ul>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mt-2">
                        <div class="col-sm-12 mb-2">
                            <label class="text-secondary">Message Template</label>
                            <select name="cmbMessageTemplate" id="txtTemplate" class="form-control">
                                <option value="">Select Template</option>
                                @foreach($qMessageTemplates as $sMessageTemplate)
                                <option value="{{ $sMessageTemplate->id }}">{{ $sMessageTemplate->title }}</option>
                                @endforeach
                            </select>
                        </div>
        
                        <div class="col-sm-12 mb-2">
                            <label class="text-secondary">Subject</label>
                            <input type="hidden" name="txtHiddenEmailId" value="{{ $sItem->email }}">
                            <input type="text" name="txtSubject" id="txtSubject" class="form-control" max="255" required>
                        </div>
        
                        <div class="col-sm-12">
                            <label class="text-secondary">Message</label>
                            <input type="hidden" name="txtHidenMessage" id="txtHidenMessage" value="">
                            <textarea name="txtMessage" class="ckeditor form-control" id="textbox" required></textarea>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div id="message-body"></div>
                </div>
            </div>
            
        </div>
        
        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</button>
            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-paper-plane fa-lg"></i> Send</button>
        </div>
        </form>

        </div>
    </div>
</div>
   