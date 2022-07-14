<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEvent extends FormRequest
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
            'eventname' => 'string|required|min:5|max:120', 'eventdate' => 'date|required', 'description' => 'string|required', 'eventtype' => 'string|required|in:Technical,Non-Technical', 'eventvenue' => 'string|required', 'eventimage' => 'nullable|file|max:10000', 'images' => 'nullable|array|max:10'
        ];
    }
}
