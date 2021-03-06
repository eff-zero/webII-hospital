<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
            'name' => 'required|string',
            'adress' => 'required|min:8',
            'comp_name' => 'required|string',
            'comp_phone' => 'required|numeric',
            'med_history' => 'required',
            'reasons' => 'required',
            'diagnosis' => 'required'
        ];
    }
}
