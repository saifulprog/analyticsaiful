<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">I'm available for freelance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="{{ route('contact') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="txtName" class="form-label">Name: <span class="text-danger">*</span></label>
                    <input type="text"  name="txtName" class="form-control" placeholder="Enter full name" autofocus required maxlength="99">

                    @if ($errors->has('txtName'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtName') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-3 mt-3">
                    <label for="txtEmail" class="form-label">Email: <span class="text-danger">*</span></label>
                    <input type="email" name="txtEmail" class="form-control" placeholder="Enter email" maxlength="99" required>

                    @if ($errors->has('txtEmail'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtEmail') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-3 mt-3">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="txtLocation" class="form-label">Location: </label>
                            <input type="text" name="txtLocation" class="form-control" placeholder="Enter your location" maxlength="69">
                        </div>

                        <div class="col-sm-6">
                            <label for="email" class="form-label">Service Type:</label>
                            <select name="cmbServiceType" id="" class="form-control" required>
                                <option value=" ">What services do you need</option>
                                <option value="1">Web Design and Web Development</option>
                                <option value="2">Web Analytics & Server Side Tracking</option>
                                <option value="3">Google, Facebook, Instragram Ads</option>
                                <option value="4">Organic SEO</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 mt-3">
                    <label for="txtEmail" class="form-label">Subject: <span class="text-danger">*</span></label>
                    <input type="text" name="txtSubject" class="form-control" placeholder="Enter email" maxlength="99" required>

                    @if ($errors->has('txtSubject'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtSubject') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="mb-3 mt-3">
                    <label for="txtEmail" class="form-label">Message: <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="txtMessage" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>

                    @if ($errors->has('txtMessage'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtMessage') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="modal-footer">
                <input type="hidden" name="txtCpt1" value="xyz99">
                <input type="hidden" name="txtCpt2" value="xyz99">
                <button type="submit" class="btn btn-outline-success"><i class="fas fa-paper-plane"></i> Send Message</button>
                <button type="reset" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fas fa-times"></i> Close &nbsp;&nbsp;</button>
            </form>
            </div>
        </div>
    </div>
</div>