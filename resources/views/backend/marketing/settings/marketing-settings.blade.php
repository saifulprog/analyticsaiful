@extends('backend.layouts.app')
@section('title') Marketing Settings @endsection
@section('breadcrumb') Marketing / Settings @endsection
@section('content')


<div class="row">
    <div class="col-sm-4 col-xl-4 xl-33">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark ribbon-primary">
            Business Types
            </div>
            
            <div class="card-body row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rdoData" id="divOne">
                    <label class="form-check-label" for="flexRadioDefault2">Add New</label>
                </div>

                <div class="col-sm-12 mb-3 divOne">
                     <form action="{{ route('marketing-settings.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="txtBusinessType" class="form-control mb-2" placeholder="Business Type" required max="69">
                        <input type="hidden" name="txtHidenValue" value="business">
                        
                        @if ($errors->has('txtBusinessType'))
                            <span class="help-block text-danger">
                            <strong>{{ $errors->first('txtBusinessType') }}</strong>
                            </span>
                        @endif
                        
                        <button type="submit" name="btnTypeSubmit" class="btn btn-success w-100">Save</button>
                     </form>
                </div>

                <div class="col-sm-12">
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Business Types</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($qBusinessTypes as $sBusinessType)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <th scope="row">{{ $sBusinessType->type_name }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>         
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-xl-4 xl-33">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark ribbon-primary">
            Country
            </div>
            
            <div class="card-body row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rdoData" id="divTwo">
                    <label class="form-check-label" for="flexRadioDefault2">Add New</label>
                </div>

                <div class="col-sm-12 mb-3 divTwo">
                    <form action="{{ route('marketing-settings.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="txtCountry" class="form-control mb-2" placeholder="Country Name" required max="69">
                        <input type="hidden" name="txtHidenValue" value="country">
                        
                        @if ($errors->has('txtCountry'))
                            <span class="help-block text-danger">
                            <strong>{{ $errors->first('txtCountry') }}</strong>
                            </span>
                        @endif
                        
                        <button type="submit" name="btnTypeSubmit" class="btn btn-success w-100">Save</button>
                     </form>
                </div>

                <div class="col-sm-12">
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Country Name</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($qCountrys as $sCountry)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <th scope="row">{{ $sCountry->country_name }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>    
                </div>         
            </div>
        </div>
    </div>

    <div class="col-sm-4 col-xl-4 xl-33">
        <div class="ribbon-wrapper card">
            <div class="ribbon ribbon-bookmark ribbon-primary">
            Provinces
            </div>
            
            <div class="card-body row">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rdoData" id="divThree">
                    <label class="form-check-label" for="flexRadioDefault2">Add New</label>
                </div>

                <div class="col-sm-12 mb-3 divThree">
                    <form action="{{ route('marketing-settings.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <select name="cmbCountry" class="form-control mb-2" required>
                            <option value="">Select Country</option>
                            @foreach($qCountrys as $sCountry)
                            <option value="{{ $sCountry->id }}">{{ $sCountry->country_name }}</option>
                            @endforeach
                        </select>

                        @if ($errors->has('cmbCountry'))
                            <span class="help-block text-danger">
                            <strong>{{ $errors->first('cmbCountry') }}</strong>
                            </span>
                        @endif
                        
                        <input type="text" name="txtProvinces" class="form-control mb-2" placeholder="Provinces Name" required max="69">
                        <input type="hidden" name="txtHidenValue" value="provinces">
                        
                        @if ($errors->has('txtProvinces'))
                            <span class="help-block text-danger">
                            <strong>{{ $errors->first('txtProvinces') }}</strong>
                            </span>
                        @endif
                        
                        <button type="submit" name="btnTypeSubmit" class="btn btn-success w-100">Save</button>
                     </form>
                </div>

                <div class="col-sm-12">
                    <table class="table">
                        <thead class="table-primary">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Country</th>
                            <th scope="col">Province</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($qProvinces as $sProvince)
                            <tr>
                                <th scope="row">{{ $loop->index + 1 }}</th>
                                <th scope="row">{{ $sProvince->country_name }}</th>
                                <th scope="row">{{ $sProvince->provinces_name }}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    @if(!empty($qProvinces))
                    {{ $qProvinces->links() }}
                    @endif
                </div>         
            </div>
        </div>
    </div>
</div>

@endsection