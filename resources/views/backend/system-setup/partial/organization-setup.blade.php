<div class="card-body">
    <form class="g-3 needs-validation" method="post" action="{{route('system-setup.update',1)}}" enctype="multipart/form-data">
        @method('PUT')@csrf
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-9 position-relative">
                        <label class="form-label" for="validationTooltip01">Organization Full Name </label>
                        <input class="form-control" value="{{ !empty($sItem->org_name)?$sItem->org_name:'' }}" type="text" name="txtOrgname" required="">
                    </div>
                    <div class="col-md-3 position-relative">
                        <label class="form-label" for="validationTooltip02">Short Name</label>
                        <input class="form-control" value="{{ !empty($sItem->org_short_name)?$sItem->org_short_name:'' }}" type="text" name="txtShortName">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-9 position-relative">
                        <label class="form-label" for="validationTooltip03">Address</label>
                        <input class="form-control" value="{{ !empty($sItem->address)?$sItem->address:'' }}" type="text" name="txtAddress">
                    </div>

                    <div class="col-md-3 position-relative">
                        <label class="form-label" for="validationTooltip04">State</label>
                        <select class="form-select" id="validationTooltip04" name="txtState">
                            <option selected="" disabled="" value="">Choose...</option>
                            @foreach($qStates as $key => $sState)
                            <option value="{{ $key }}">{{ $sState }}</option>
                            @endforeach
                        </select>
                        <div class="invalid-tooltip">Please select a valid state.</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 position-relative">
                        <label class="form-label" for="validationTooltip03">Contact Person</label>
                        <input class="form-control" value="{{ !empty($sItem->contact_person)?$sItem->contact_person:'' }}" type="text" name="txtContactPerson">
                    </div>
    
                    <div class="col-md-3 position-relative">
                        <label class="form-label" for="validationTooltip03">Mobile</label>
                        <input class="form-control" value="{{ !empty($sItem->mobile)?$sItem->mobile:'' }}" type="text" name="txtMobile">
                    </div>
    
    
                    <div class="col-md-3 position-relative">
                        <label class="form-label" for="validationTooltip03">Email</label>
                        <input class="form-control" value="{{ !empty($sItem->email)?$sItem->email:'' }}" type="text" name="txtEmail">
                    </div>
    
                    <div class="col-md-3 position-relative">
                        <label class="form-label" for="validationTooltip04">Orgnization Type</label>
                        <select class="form-select" id="validationTooltip04" name="txtOrgType">
                            <option selected="" disabled="" value="">Choose...</option>
                            @foreach($qOrgTypes as $key => $sOrgType)
                            <option value="{{ $key }}">{{ $sOrgType }}</option>
                            @endforeach
                        </select>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 position-relative">
                        <label for="txtDescription">Google Map</label>
                        <input type="text" name="txtGogleMap" value="{{ !empty($sItem->google_map)?$sItem->google_map:'' }}" class="form-control @error('txtGoogleMap') is-invalid @enderror" maxlength="255">
                        
                        @error('txtGoogleMap')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label class="form-label" for="validationTooltipUsername">Logo</label>
                    <input type="file" name="fImage" class="form-control" accept=".jpeg, .jpg, .png" onchange="document.getElementById('picture').src = window.URL.createObjectURL(this.files[0])">
                    <input type="hidden" name="fOldFile" value="{{ !empty($sItem->logo)?$sItem->logo:'' }}">
                </div>

                <div class="form-group">
                    @if(!empty($sItem->logo) && file_exists($sItem->logo))
                    <img src="{{ asset($sItem->logo)}}" id="picture" class="img-fluid" alt="Your Logo"/>
                    @else
                    <img src="{{ asset('media/default/Blank-Logo.png')}}" id="picture" class="img-fluid" alt="Your Logo"/>
                    @endif
                </div>

                <div class="form-group">
                    @permission('system-setup-edit')
                    <button class="btn btn-outline-success"><i class="fa fa-check fa-lg"></i> Save Orgnization Information</i></button>            
                    @endpermission
                </div>
            </div>
            
        </div>

        
    </form>
</div>