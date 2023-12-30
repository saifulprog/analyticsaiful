<?php

namespace App\Http\Controllers\Backend\SystemSetup;

use App\Http\Controllers\Controller;
use App\Http\Traits\FileUploadTrait;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Image;
use Auth;
use DB;

class SystemSetupController extends Controller
{
    use FileUploadTrait;

    public function __construct()
    {
      $this->middleware('auth');
    }
    
    
    public function index()
    {
        Gate::authorize('system-setup-show');

        $sItem = DB::table('organizations')->where('id',1)->first();

        $qStates = [
            'Barishal'=>'Barishal',
            'Chattogram'=>'Chattogram',
            'Dhaka'=>'Dhaka',
            'Khulna'=>'Khulna',
            'Rajshahi'=>'Rajshahi',
            'Rangpur'=>'Rangpur',
            'Mymensingh'=>'Mymensingh',
            'Sylhet'=>'Sylhet',
        ];

        $qOrgTypes = [
            'Educational' => 'Educational',
            'Business' => 'Business Profile',
            'Realstates' => 'Realstates',
            'Service Provider' => 'Service Provider',
        ];
        
        return view('backend.system-setup.default-setup', compact('sItem','qStates','qOrgTypes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gate::authorize('system-setup-edit');

        $this->validate($request, [
            'txtOrgname' => 'required|string|max:255',
        ]);

        if(!empty($request->file('fImage'))){
            $sFilePath = $this->imageUpload($request->file('fImage'), 280,300,'media/default/logo/');
        }else{
            $sFilePath = $request->fOldFile;
        }

        DB::table('organizations')->updateOrInsert(
            [
                'created_at'=>date('Y-m-d')
            ],
            [
                'org_name' => $request->txtOrgname,
                'org_short_name' => $request->txtShortName,
                'address' => $request->txtAddress,
                'state' => $request->txtState,
                'contact_person' => $request->txtContactPerson,
                'mobile' => $request->txtMobile,
                'email' => $request->txtEmail,
                'org_type' => $request->txtOrgType,
                'logo' => $sFilePath,
                'google_map' => $request->txtGogleMap,
                'remember_token' => $request->_token,
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        );
  
        $request->session()->flash('alert-warning', 'Organization information updated successfully.');
        return redirect('system-setup');
    }

}
