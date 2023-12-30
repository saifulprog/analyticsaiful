<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    { 
        return $this->getCustomRules($this->method());
    }


    public function getCustomRules($method)
    {
        $rules = [];

        switch($method) {
            case "POST" :
                $rules = [
                    'txtName' => 'required|string|max:129',
                    'txtEmail' => 'required|string|email|max:69|unique:users,email',
                    'txtPassword' => 'required|string|min:8|max:16',
                    'txtMobile' => 'required|max:11',
                    'cmbRole' => 'required',
                    'filProfile' => 'image|mimes:jpeg,png,jpg',
                ];
            break;
            case "PUT":
                $rules = [
                    'txtName' => 'required|string|max:129',
                    'txtMobile' => 'required|max:11',
                    'cmbRole' => 'required',
                    'filProfile' => 'image|mimes:jpeg,png,jpg',
                ];

                if(!empty($this->input('txtPassword'))){
                    $rules = [
                        'txtPassword' => 'string|min:8|max:16',
                    ];
                }
            break;
        }

        return $rules;
    }

}
