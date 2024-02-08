<?php

namespace App\Http\Controllers\Backend\Marketing;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BusinessType;
use App\Models\Country;
use App\Models\Provinces;
use Helper;
use Auth;
use DB;

class MarketingSettingsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }


    public function index()
    {
        // Gate::authorize('users-edit');
        $qBusinessTypes = BusinessType::all();
        $qCountrys = Country::all();
        $qProvinces = Provinces::join('countries','provinces.country_id','=','countries.id')->paginate(20);

        return view('backend.marketing.settings.marketing-settings', compact('qBusinessTypes','qCountrys','qProvinces'));
    }

    
    public function store(Request $request)
    {
        try{
            $sMessage = "";
            if($request->txtHidenValue == 'business'){
                $this->validate($request, [
                    'txtBusinessType' => 'string|max:69|required|unique:business_types,type_name',
                ]);
    
                $sMessage = 'Business Type information added successfully.';
        
                BusinessType::create([
                    'type_name' => $request->txtBusinessType
                ]);
            }elseif($request->txtHidenValue == 'country'){
                $this->validate($request, [
                    'txtCountry' => 'string|max:69|required|unique:countries,country_name',
                ]);
                
                $sMessage = 'Country information added successfully.';
    
                Country::create([
                    'country_name' => $request->txtCountry,
                    'publish' => 1,
                    'remember_token' => $request->_token
                ]);
            }elseif($request->txtHidenValue == 'provinces'){
                $this->validate($request, [
                    'cmbCountry' => 'required',
                    'txtProvinces' => 'string|max:69|required|unique:provinces,provinces_name',
                ]);
                
                $sMessage = 'Provinces information added successfully.';
    
                Provinces::create([
                    'country_id' => $request->cmbCountry,
                    'provinces_name' => $request->txtProvinces,
                    'publish' => 1,
                    'remember_token' => $request->_token
                ]);
            }
        }catch(\Exception $exception){
            $sMessage = $exception->getMessage();
        }
          
        $request->session()->flash('alert-warning', "$sMessage");

        return redirect('marketing-settings');
    }


    
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

   
}
