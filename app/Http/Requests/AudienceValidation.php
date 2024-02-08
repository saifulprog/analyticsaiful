<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AudienceValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule','array<mixed>','string>
     */
    public function rules(): array
    {
        return $this->getCustomRules($this->method());
    }

    public function getCustomRules($method)
    {
        $rules = [];

        switch($method) {
            case "POST" :

                $rules = [
                    'cmbBusinessType' => 'required',
                    'cmbCountry' => 'required',
                    'txtOrganization' => 'nullable|string|max:255|unique:targeted_audience,organization',
                    'txtWebsite' => 'nullable|string|max:255|unique:targeted_audience,website',
                    'txtEmail' => 'nullable|email|max:99|unique:targeted_audience,email',
                    'txtLinkedin' => 'nullable|string|max:255|unique:targeted_audience,linkedin',
                    'txtWhatsApp' => 'nullable|string|max:19|unique:targeted_audience,whats_app',
                    'txtFacebook' => 'nullable|string|max:255|unique:targeted_audience,facebook',
                    'txtInstagram' => 'nullable|string|max:255|unique:targeted_audience,instagram',
                    'txtTwiter' => 'nullable|string|max:255|unique:targeted_audience,twiter',
                    'txtYouTube' => 'nullable|string|max:255|unique:targeted_audience,youtube',
                    'txtTikTok' => 'nullable|string|max:255|unique:targeted_audience,tiktok',
                ];

            break;
            
            case "PUT":
                $rules = [
                    'cmbBusinessType' => 'required',
                    'cmbCountry' => 'required',
                ];

                if(!empty($this->input('txtOrganization'))){
                    $rules = ['txtOrganization' => ['string','max:255', Rule::unique('targeted_audience','organization')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtWebsite'))){
                    $rules = ['txtWebsite' => ['string','max:255', Rule::unique('targeted_audience','website')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtEmail'))){
                    $rules = ['txtEmail' => ['string','max:99', Rule::unique('targeted_audience','email')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtLinkedin'))){
                    $rules = ['txtLinkedin' => ['string','max:255', Rule::unique('targeted_audience','linkedin')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtWhatsApp'))){
                    $rules = ['txtWhatsApp' => ['string','max:19', Rule::unique('targeted_audience','whats_app')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtFacebook'))){
                    $rules = ['txtFacebook' => ['string','max:255', Rule::unique('targeted_audience','facebook')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtInstagram'))){
                    $rules = ['txtInstagram' => ['string','max:255', Rule::unique('targeted_audience','instagram')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtTwiter'))){
                    $rules = ['txtTwiter' => ['string','max:255', Rule::unique('targeted_audience','twiter')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtYouTube'))){
                    $rules = ['txtYouTube' => ['string','max:255', Rule::unique('targeted_audience','youtube')->ignore($this->route('targeted-audience'))]];
                }elseif(!empty($this->input('txtTikTok'))){
                    $rules = ['txtTikTok' => ['string','max:255', Rule::unique('targeted_audience','tiktok')->ignore($this->route('targeted-audience'))]];
                }
            break;
        }

        return $rules;
    }
}
