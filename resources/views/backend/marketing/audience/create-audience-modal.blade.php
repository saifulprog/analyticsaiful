<div class="modal fade" id="createModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Create Audience</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('targeted-audience.store') }}" enctype="multipart/form-data">
            @csrf
        <div class="modal-body">

            <div class="row">
                <div class="col-sm-4">
                    <label class="text-secondary">Business Type</label>
                    <select name="cmbBusinessType" class="form-control mb-2 border-danger">
                        <option value="0">Select Business Type</option>
                        @foreach($qBusinessTypes as $sBusinessType)
                        <option value="{{ $sBusinessType->id }}">{{ $sBusinessType->type_name }}</option>
                        @endforeach
                    </select>
                    
                    @if ($errors->has('cmbBusinessType'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('cmbBusinessType') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Country</label>
                    <select name="cmbCountry" class="form-control mb-2 border-danger country-dropdown" required>
                        <option value="0">Select Country</option>
                        @foreach($qCountries as $sCountrie)
                        <option value="{{ $sCountrie->id }}">{{ $sCountrie->country_name }}</option>
                        @endforeach
                    </select>
                    
                    @if ($errors->has('cmbCountry'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('cmbCountry') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Provinces</label>
                    <select name="cmbProvinces" class="form-control mb-2 border-danger city-dropdown">
                                
                    </select>                   
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label class="text-secondary">Organization</label>
                    <input type="text" name="txtOrganization" class="form-control border-info" placeholder="Organization Name" max="255">

                    @if ($errors->has('txtOrganization'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtOrganization') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Concern Person</label>
                    <input type="text" name="txtConcernPerson" class="form-control" placeholder="Concern Person" max="99">
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Website</label>
                    <input type="text" name="txtWebsite" class="form-control" placeholder="Website URL" max="255">

                    @if ($errors->has('txtWebsite'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtWebsite') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label class="text-secondary">Email</label>
                    <input type="email" name="txtEmail" class="form-control border-success" placeholder="Email" max="99">

                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">LinkedIn</label>
                    <input type="text" name="txtLinkedin" class="form-control border-success" placeholder="LinkedIn" max="255">

                    @if ($errors->has('txtLinkedin'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtLinkedin') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">WhatsApp</label>
                    <input type="text" name="txtWhatsApp" class="form-control border-success" placeholder="WhatsApp" max="19">

                    @if ($errors->has('txtWhatsApp'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtWhatsApp') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label class="text-secondary">Facebook</label>
                    <input type="text" name="txtFacebook" class="form-control border-success" placeholder="Facebook" max="255">

                    @if ($errors->has('txtFacebook'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtFacebook') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Instagram</label>
                    <input type="text" name="txtInstagram" class="form-control border-success" placeholder="Instagram" max="255">

                    @if ($errors->has('txtInstagram'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtInstagram') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Twiter</label>
                    <input type="text" name="txtTwiter" class="form-control" placeholder="Twiter" max="255">

                    @if ($errors->has('txtTwiter'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtTwiter') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label class="text-secondary">YouTube</label>
                    <input type="text" name="txtYouTube" class="form-control border-success" placeholder="YouTube" max="255">

                    @if ($errors->has('txtYouTube'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtYouTube') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">TikTok</label>
                    <input type="text" name="txtTikTok" class="form-control" placeholder="TikTok" max="255">

                    @if ($errors->has('txtTikTok'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtTikTok') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Other Social Media</label>
                    <input type="text" name="txtOtherSocialMedia" class="form-control" placeholder="Other Social Media" max="255">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-2">
                    <label class="text-secondary">Email Send</label>
                    <select name="cmbEmailSend" class="form-control border-warning">
                        <option value="0">Not Send</option>
                        <option value="1">1st Time</option>
                        <option value="2">2nd Time</option>
                        <option value="3">3rd Time</option>
                        <option value="4">4th Time</option>
                        <option value="5">5th Time</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Status</label>
                    <select name="cmbStatus" class="form-control border-warning">
                        <option value="0">No Action</option>
                        <option value="1">Sent Offer</option>
                        <option value="2">Re-Sent Offer</option>
                        <option value="3">Responded</option>
                        <option value="4">On Proces</option>
                        <option value="5">Become a Alient</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">WhatsApp Send</label>
                    <select name="cmbWhatsAppSend" class="form-control border-warning">
                        <option value="0">Not Send</option>
                        <option value="1">1st Time</option>
                        <option value="2">2nd Time</option>
                        <option value="3">3rd Time</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">LinkedIn Connect</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="txtLinkedInConnect" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Facebook Connect</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkFacebookConnect" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Instagram Connect</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkInstagramConnect" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-2">
                    <label class="text-secondary">Web Development</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkWebDevelopment" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Email Marketing</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkEmailMarketing" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Google Ads</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkGoogleAds" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Web Analytic</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkWebAnalytic" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Social Media(SMM)</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkSocialMedia" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">SEO</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkSEO" value="1"><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12">
                    <label class="text-secondary">Note</label>
                    <textarea name="txtNote" rows="5" class="form-control"></textarea>
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