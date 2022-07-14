<?php

namespace App\Http\Requests;

use App\Rules\Captcha;
use Illuminate\Foundation\Http\FormRequest;

class addmember extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|required',
            'dob' => 'date|required',
            'gender' => 'string|required|in:male,female,other',
            'street' => 'required|min:3|max:1000',
            'city' => 'string|required',
            'state' => 'string|required',
            'country' => 'string|required',
            'email' => 'string|required|unique:members|email',
            'mblno' => 'integer|required|unique:members',
            'company-add' => 'required|min:3|max:1000s',
            'designation' => 'string|required',
            'Additional-Info' => 'min:3|max:1000|nullable',
            'area_of_expertise' => 'string|required',
            'hospital_associated_with' => 'string|required',
            'g-recaptcha-response' => new Captcha,
        ];
    }
}
