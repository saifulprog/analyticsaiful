<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContentValidation extends FormRequest


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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
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
                    'txtEngTitle' => ['required','string','max:120','unique:contents','eng_title'],
                    'txtEngMetaTitle' => 'max:99',
                    'txtBngMetaTitle' => 'max:99',
                    'txtEngMetaKeyword' => 'max:255',
                    'txtBngMetaKeyword' => 'max:255',
                    'txtEngMetaDescription' => 'max:199',
                    'txtBngMetaDescription' => 'max:199',
                    'txtEngSlug' => ['required','string','max:255','unique:contents','en_slug'],
                    'cmbCatID' => 'required',
                    'txtVideoID' => 'max:69',
                    'fImage' => ['image','mimes:jpeg,png,jpg','max:2048'],
                    'fPDF' => ['mimes:pdf','max:2048'],
                ];

                if(!empty($this->input('txtBngTitle'))){
                    $rules = ['txtBngTitle' => 'string|max:120|unique:contents,bng_title',];
                }elseif(!empty($this->input('txtEngBrief'))){
                    $rules = ['txtEngBrief' => ['string','max:255'],];
                }elseif(!empty($this->input('txtBngBrief'))){
                    $rules = ['txtBngBrief' => ['string','max:255'],];
                }elseif(!empty($this->input('txtBngSlug'))){
                    $rules = ['txtBngSlug' => ['required','string','max:255','unique:contents','bn_slug']];
                }
            break;
            
            case "PUT":
                $rules = [
                    'txtEngTitle' => ['required','string','max:120', Rule::unique('contents','eng_title')->ignore($this->route('content_information'))],
                    'txtEngMetaTitle' => 'max:99',
                    'txtBngMetaTitle' => 'max:99',
                    'txtEngMetaKeyword' => 'max:255',
                    'txtBngMetaKeyword' => 'max:255',
                    'txtEngMetaDescription' => 'max:199',
                    'txtBngMetaDescription' => 'max:199',
                    'txtEngSlug' => ['required','string','max:255', Rule::unique('contents','en_slug')->ignore($this->route('content_information'))],
                    'cmbCatID' => 'required',
                    'txtVideoID' => 'max:69',
                    'fImage' => ['image','mimes:jpeg,png,jpg','max:2048'],
                    'fPDF' => ['mimes:pdf','max:2048'],
                ];

                if(!empty($this->input('txtBngTitle'))){
                    $rules = ['txtBngTitle' => ['string','max:120', Rule::unique('contents','bng_title')->ignore($this->route('content_information'))]];
                }elseif(!empty($this->input('txtEngBrief'))){
                    $rules = ['txtEngBrief' => ['string','max:255'],];
                }elseif(!empty($this->input('txtBngBrief'))){
                    $rules = ['txtBngBrief' => ['string','max:255'],];
                }elseif(!empty($this->input('txtBngSlug'))){
                    $rules = ['txtBngSlug' => ['string','max:255', Rule::unique('contents','bn_slug')->ignore($this->route('content_information'))]];
                }
            break;
        }

        return $rules;
    }
}
