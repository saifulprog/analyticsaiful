<?php

namespace App\Http\Controllers\Backend\Marketing;

use App\Http\Requests\AudienceValidation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinces;
use App\Models\TargetedAudience;
use Auth;
use DB;

class TargetedAudienceController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }


    public function index(Request $request)
    {
        try{
            $qBusinessTypes = DB::table('business_types')->get();
            $qCountries = DB::table('countries')->get();
            $qProvinces = DB::table('provinces')->get();
            $qMessageTemplates = DB::table('messages')->where('publish',1)->get();

            $qInfo = DB::table('targeted_audience as taau')
            ->join('business_types as buty','taau.business_type_id','=','buty.id')
            ->join('countries','taau.country_id','=','countries.id')
            ->select('taau.*','buty.type_name','countries.country_name');
            if(!empty($request->cmbBusinessType)){$qInfo->where('business_type_id',$request->cmbBusinessType);}
            if(!empty($request->cmbCountry)){$qInfo->where('country_id',$request->cmbCountry);}
            if(!empty($request->cmbProvinces)){$qInfo->where('provinces_id',$request->cmbProvinces);}
            if(!empty($request->cmbItemType ) && !empty($request->txtSearch )){$qInfo->where("$request->cmbItemType",$request->txtSearch);}
            if(!empty($request->cmbStatus)){$qInfo->where('status',$request->cmbStatus);}
            if(!empty($request->cmbEmailSend)){$qInfo->where('email_send',$request->cmbEmailSend);}
            if(!empty($request->cmbWhatsAppSend)){$qInfo->where('whats_app_send',$request->cmbWhatsAppSend);}
            if(!empty($request->txtLinkedInConnect)){$qInfo->where('linkedin_connect',$request->txtLinkedInConnect);}
            if(!empty($request->chkFacebookConnect)){$qInfo->where('facebook_connect',$request->chkFacebookConnect);}
            if(!empty($request->chkInstagramConnect)){$qInfo->where('instagram_connect',$request->chkInstagramConnect);}
            if(!empty($request->chkWebDevelopment)){$qInfo->where('web_development',$request->chkWebDevelopment);}
            if(!empty($request->chkEmailMarketing)){$qInfo->where('email_marketing',$request->chkEmailMarketing);}
            if(!empty($request->chkGoogleAds)){$qInfo->where('google_ads',$request->chkGoogleAds);}
            if(!empty($request->chkWebAnalytic)){$qInfo->where('web_analytic',$request->chkWebAnalytic);}
            if(!empty($request->chkSocialMedia)){$qInfo->where('social_media',$request->chkSocialMedia);}
            if(!empty($request->chkSEO)){$qInfo->where('seo',$request->chkSEO);}
            if(!empty($request->chkInactive)){$qInfo->where('active',$request->chkInactive);}
            $qItems = $qInfo->paginate(50);

        }catch(\Exception $exception){
            $sMessage = $exception->getMessage();
            $request->session()->flash('alert-warning', "$sMessage");
        }

        return view('backend.marketing.audience.targeted-audience', compact('qBusinessTypes','qCountries','qItems','qProvinces','qMessageTemplates'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AudienceValidation $request)
    {
        try{
            DB::table('targeted_audience')->insert([
                'business_type_id' => $request->cmbBusinessType,
                'country_id' => $request->cmbCountry,
                'provinces_id' => $request->cmbProvinces,
                'organization' => $request->txtOrganization,
                'concern_person' => $request->txtConcernPerson,
                'website' => $request->txtWebsite,
                'email' => $request->txtEmail,
                'linkedin' => $request->txtLinkedin,
                'whats_app' => $request->txtWhatsApp,
                'facebook' => $request->txtFacebook,
                'instagram' => $request->txtInstagram,
                'twiter' => $request->txtTwiter,
                'youtube' => $request->txtYouTube,
                'tiktok' => $request->txtTikTok,
                'other_social_media' => $request->txtOtherSocialMedia,
                'email_send' => $request->cmbEmailSend,
                'status' => $request->cmbStatus,
                'whats_app_send' => !empty($request->cmbWhatsAppSend)??0,
                'linkedin_connect' => !empty($request->txtLinkedInConnect)??0,
                'facebook_connect' => !empty($request->chkFacebookConnect)??0,
                'instagram_connect' => !empty($request->chkInstagramConnect)??0,
                'web_development' => !empty($request->chkWebDevelopment)??0,
                'email_marketing' => !empty($request->chkEmailMarketing)??0,
                'google_ads' => !empty($request->chkGoogleAds)??0,
                'web_analytic' => !empty($request->chkWebAnalytic)??0,
                'social_media' => !empty($request->chkSocialMedia)??0,
                'seo' => !empty($request->chkSEO)??0,
                'note' => $request->txtNote,
                'active' => 1,
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id,
                'remember_token' => $request->_token,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $sMessage = 'Audience information added successfully.';
        }catch(\Exception $exception){
            $sMessage = $exception->getMessage();
        }

        $request->session()->flash('alert-warning', "$sMessage");

        return redirect('targeted-audience');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try{
            DB::table('targeted_audience')->where('id',$id)->update([
                'business_type_id' => $request->cmbBusinessType,
                'country_id' => $request->cmbCountry,
                'provinces_id' => $request->cmbProvinces,
                'organization' => $request->txtOrganization,
                'concern_person' => $request->txtConcernPerson,
                'website' => $request->txtWebsite,
                'email' => $request->txtEmail,
                'linkedin' => $request->txtLinkedin,
                'whats_app' => $request->txtWhatsApp,
                'facebook' => $request->txtFacebook,
                'instagram' => $request->txtInstagram,
                'twiter' => $request->txtTwiter,
                'youtube' => $request->txtYouTube,
                'tiktok' => $request->txtTikTok,
                'other_social_media' => $request->txtOtherSocialMedia,
                'email_send' => $request->cmbEmailSend,
                'status' => $request->cmbStatus,
                'whats_app_send' => !empty($request->cmbWhatsAppSend)??0,
                'linkedin_connect' => !empty($request->txtLinkedInConnect)??0,
                'facebook_connect' => !empty($request->chkFacebookConnect)??0,
                'instagram_connect' => !empty($request->chkInstagramConnect)??0,
                'web_development' => !empty($request->chkWebDevelopment)??0,
                'email_marketing' => !empty($request->chkEmailMarketing)??0,
                'google_ads' => !empty($request->chkGoogleAds)??0,
                'web_analytic' => !empty($request->chkWebAnalytic)??0,
                'social_media' => !empty($request->chkSocialMedia)??0,
                'seo' => !empty($request->chkSEO)??0,
                'note' => $request->txtNote,
                'active' => 1,
                'updated_by' => Auth::user()->id,
                'remember_token' => $request->_token,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $sMessage = 'Audience information updated successfully.';
        }catch(\Exception $exception){
            $sMessage = $exception->getMessage();
        }

        $request->session()->flash('alert-warning', "$sMessage");

        return redirect('targeted-audience');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function fetchCity(Request $request)
    {
        $data['cities'] = Provinces::where("country_id", $request->id)->get(["provinces_name", "id"]);                   
        return response()->json($data);
    }


    public function fetchTemplate(Request $request)
    {
        $data['template'] = DB::table('messages')->where("id", $request->id)->select('subject','message')->first();                   
        return response()->json($data);
    }

}
