<div class="modal fade" id="editModal{{ $sItem->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Edit Audience</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST" action="{{ route('targeted-audience.update',$sItem->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="modal-body">

            <div class="row">
                <div class="col-sm-4">
                    <label class="text-secondary">Business Type</label>
                    <select name="cmbBusinessType" class="form-control mb-2 border-danger">
                        <option value="0">Select Business Type</option>
                        @foreach($qBusinessTypes as $sBusinessType)
                        <option value="{{ $sBusinessType->id }}" @if($sItem->business_type_id==$sBusinessType->id) selected @endif>{{ $sBusinessType->type_name }}</option>
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
                    <select name="cmbCountry" class="form-control mb-2 border-danger" id="country-dropdown" required>
                        <option value="0">Select Country</option>
                        @foreach($qCountries as $sCountrie)
                        <option value="{{ $sCountrie->id }}" @if($sItem->country_id==$sCountrie->id) selected @endif>{{ $sCountrie->country_name }}</option>
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
                    <select name="cmbProvinces" class="form-control mb-2 border-danger">
                        <option value="0">Select Provinces</option>
                        @foreach($qProvinces as $sProvince)
                        <option value="{{ $sProvince->id }}" @if($sItem->provinces_id==$sProvince->id) selected @endif>{{ $sProvince->provinces_name }}</option>
                        @endforeach
                    </select>                   
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <label class="text-secondary">Organization</label>
                    <input type="text" name="txtOrganization" value="{{ $sItem->organization }}" class="form-control border-info" placeholder="Organization Name" max="255">

                    @if ($errors->has('txtOrganization'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtOrganization') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Concern Person</label>
                    <input type="text" name="txtConcernPerson" value="{{ $sItem->organization }}" class="form-control" placeholder="Concern Person" max="99">
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Website</label>
                    <input type="text" name="txtWebsite" value="{{ $sItem->organization }}" class="form-control" placeholder="Website URL" max="255">

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
                    <input type="email" name="txtEmail" value="{{ $sItem->email }}" class="form-control border-success" placeholder="Email" max="99">

                    @if ($errors->has('email'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">LinkedIn</label>
                    <input type="text" name="txtLinkedin" value="{{ $sItem->linkedin }}" class="form-control border-success" placeholder="LinkedIn" max="255">

                    @if ($errors->has('txtLinkedin'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtLinkedin') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">WhatsApp</label>
                    <input type="text" name="txtWhatsApp" value="{{ $sItem->whats_app }}" class="form-control border-success" placeholder="WhatsApp" max="19">

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
                    <input type="text" name="txtFacebook" value="{{ $sItem->facebook }}" class="form-control border-success" placeholder="Facebook" max="255">

                    @if ($errors->has('txtFacebook'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtFacebook') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Instagram</label>
                    <input type="text" name="txtInstagram" value="{{ $sItem->instagram }}" class="form-control border-success" placeholder="Instagram" max="255">

                    @if ($errors->has('txtInstagram'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtInstagram') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Twiter</label>
                    <input type="text" name="txtTwiter" value="{{ $sItem->twiter }}" class="form-control" placeholder="Twiter" max="255">

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
                    <input type="text" name="txtYouTube" value="{{ $sItem->youtube }}" class="form-control border-success" placeholder="YouTube" max="255">

                    @if ($errors->has('txtYouTube'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtYouTube') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">TikTok</label>
                    <input type="text" name="txtTikTok" value="{{ $sItem->twiter }}" class="form-control" placeholder="TikTok" max="255">

                    @if ($errors->has('txtTikTok'))
                        <span class="help-block text-danger">
                        <strong>{{ $errors->first('txtTikTok') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="col-sm-4">
                    <label class="text-secondary">Other Social Media</label>
                    <input type="text" name="txtOtherSocialMedia" value="{{ $sItem->other_social_media }}" class="form-control" placeholder="Other Social Media" max="255">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-sm-2">
                    <label class="text-secondary">Email Send</label>
                    <select name="cmbEmailSend" class="form-control border-warning">
                        <option value="0" @if($sItem->email_send==0) selected @endif>Not Send</option>
                        <option value="1" @if($sItem->email_send==1) selected @endif>1st Time</option>
                        <option value="2" @if($sItem->email_send==2) selected @endif>2nd Time</option>
                        <option value="3" @if($sItem->email_send==3) selected @endif>3rd Time</option>
                        <option value="4" @if($sItem->email_send==4) selected @endif>4th Time</option>
                        <option value="5" @if($sItem->email_send==5) selected @endif>5th Time</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Status</label>
                    <select name="cmbStatus" class="form-control border-warning">
                        <option value="0" @if($sItem->status==0) selected @endif>No Action</option>
                        <option value="1" @if($sItem->status==1) selected @endif>Sent Offer</option>
                        <option value="2" @if($sItem->status==2) selected @endif>Re-Sent Offer</option>
                        <option value="3" @if($sItem->status==3) selected @endif>Responded</option>
                        <option value="4" @if($sItem->status==4) selected @endif>On Proces</option>
                        <option value="5" @if($sItem->status==5) selected @endif>Become a Alient</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">WhatsApp Send</label>
                    <select name="cmbWhatsAppSend" class="form-control border-warning">
                        <option value="0" @if($sItem->whats_app_send==0) selected @endif>Not Send</option>
                        <option value="1" @if($sItem->whats_app_send==1) selected @endif>1st Time</option>
                        <option value="2" @if($sItem->whats_app_send==2) selected @endif>2nd Time</option>
                        <option value="3" @if($sItem->whats_app_send==3) selected @endif>3rd Time</option>
                    </select>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">LinkedIn Connect</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="txtLinkedInConnect" value="1" @if($sItem->linkedin_connect==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Facebook Connect</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkFacebookConnect" value="1" @if($sItem->facebook_connect==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Instagram Connect</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkInstagramConnect" value="1" @if($sItem->instagram_connect==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-2">
                    <label class="text-secondary">Web Development</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkWebDevelopment" value="1" @if($sItem->web_development==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Email Marketing</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkEmailMarketing" value="1" @if($sItem->email_marketing==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Google Ads</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkGoogleAds" value="1" @if($sItem->google_ads==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Web Analytic</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkWebAnalytic" value="1" @if($sItem->web_analytic==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">Social Media(SMM)</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkSocialMedia" value="1" @if($sItem->social_media==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>

                <div class="col-sm-2">
                    <label class="text-secondary">SEO</label>
                    <div class="media-body icon-state switch-outline">
                        <label class="switch">
                          <input type="checkbox" name="chkSEO" value="1" @if($sItem->seo==1) checked @endif><span class="switch-state bg-primary"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-12">
                    <label class="text-secondary">Note</label>
                    <textarea name="txtNote" rows="5" class="form-control">{{ $sItem->note }}</textarea>
                </div>
            </div>            
            
            
        </div>
        

        <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"><i class="fa fa-times fa-lg"></i> Close</button>
            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-check fa-lg"></i> Update</button>
        </div>
        </form>

        </div>
    </div>
</div>