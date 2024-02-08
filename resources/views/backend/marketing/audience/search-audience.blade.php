<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Search Audience Information</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <form method="GET" action="{{ route('targeted-audience.index') }}" enctype="multipart/form-data">
    @csrf
  <div class="offcanvas-body">
    <div class="row">
        <div class="col-sm-12 mb-1">
            <select name="cmbBusinessType" class="form-control">
                <option value="0">Select Business Type</option>
                @foreach($qBusinessTypes as $sBusinessType)
                <option value="{{ $sBusinessType->id }}">{{ $sBusinessType->type_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-12 mb-1">
            <select name="cmbCountry" class="form-control country-dropdown" required>
                <option value="0">Select Country</option>
                @foreach($qCountries as $sCountrie)
                <option value="{{ $sCountrie->id }}">{{ $sCountrie->country_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-sm-12 mb-1">
            <select name="cmbProvinces" class="form-control city-dropdown">
                        
            </select>                   
        </div>

        <div class="col-sm-12 mb-1">
            <select name="cmbItemType" class="form-control border-warning">
                <option value="0">-Select Type-</option>
                <option value="organization">Organization</option>
                <option value="concern_person">Concern Person</option>
                <option value="website">Website</option>
                <option value="email">Email</option>
                <option value="linkedin">LinkedIn</option>
                <option value="whats_app">WhatsApp</option>
                <option value="facebook">Facebook</option>
                <option value="instagram">Instagram</option>
                <option value="twiter">Twiter</option>
                <option value="youtube">YouTube</option>
                <option value="tiktok">TikTok</option>
                <option value="other_social_media">Other Social Media</option>
            </select>
        </div>

        <div class="col-sm-12 mb-1">
            <input type="text" name="txtSearch" class="form-control  border-warning" placeholder="">
        </div>

        <div class="col-sm-12 mb-1">
            <select name="cmbStatus" class="form-control">
                <option value="">Status</option>
                <option value="0">No Action</option>
                <option value="1">Sent Offer</option>
                <option value="2">Re-Sent Offer</option>
                <option value="3">Responded</option>
                <option value="4">On Proces</option>
                <option value="5">Become a Alient</option>
            </select>
        </div>

        <div class="col-sm-12 mb-1">
            <select name="cmbEmailSend" class="form-control">
                <option value="">Email Send</option>
                <option value="0">Not Send</option>
                <option value="1">1st Time</option>
                <option value="2">2nd Time</option>
                <option value="3">3rd Time</option>
                <option value="4">4th Time</option>
                <option value="5">5th Time</option>
            </select>
        </div>

        <div class="col-sm-12 mb-1">
            <select name="cmbWhatsAppSend" class="form-control">
                <option value="">WhatsApp Send</option>
                <option value="0">Not Send</option>
                <option value="1">1st Time</option>
                <option value="2">2nd Time</option>
                <option value="3">3rd Time</option>
            </select>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-sm-6">
            <label class="text-secondary">LinkedIn Connect</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="txtLinkedInConnect" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Facebook Connect</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkFacebookConnect" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Instagram Connect</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkInstagramConnect" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Web Development</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkWebDevelopment" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Email Marketing</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkEmailMarketing" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Google Ads</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkGoogleAds" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Web Analytic</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkWebAnalytic" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Social Media(SMM)</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkSocialMedia" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">SEO</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkSEO" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-6">
            <label class="text-secondary">Inactive</label>
            <div class="media-body icon-state switch-outline">
                <label class="switch">
                  <input type="checkbox" name="chkInactive" value="1"><span class="switch-state bg-primary"></span>
                </label>
            </div>
        </div>

        <div class="col-sm-12 mt-3">
            <button type="submit" class="btn btn-primary btn-lg w-100"><i class="fa fa-search-plus"> Search Now</i></button>
        </div>
    </div>

  </div>
  </form>
</div>