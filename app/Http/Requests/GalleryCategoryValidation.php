<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GalleryCategoryValidation extends FormRequest
{
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
                    'cmbParentID' => 'required|string|max:99',
                    'txtCatName' => 'required|string|max:60|unique:gallery_categories,cat_name',
                    'txtTitle' => 'required|string|max:60|unique:gallery_categories,cat_meta_title',
                    'txtKeyword' => 'max:255',
                    'txtDescription' => 'max:160',
                    'txtSLUG' => 'required|string|max:255',
                    'fImage' => 'image|mimes:jpeg,png,jpg|max:1024'
                ];
            break;
            case "PUT":
                $rules = [
                    'cmbParentID' => 'required|string|max:99',
                    'txtCatName' => 'required|string|max:60|unique:gallery_categories,cat_name,'.$this->id,
                    'txtTitle' => 'required|string|max:60|unique:gallery_categories,cat_meta_title,'.$this->id,
                    'txtKeyword' => 'max:255',
                    'txtDescription' => 'max:160',
                    'txtSLUG' => 'required|string|max:255',
                    'fImage' => 'image|mimes:jpeg,png,jpg|max:1024'
                ];

            break;
        }

        return $rules;
    }
}
