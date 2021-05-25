<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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

            'name' => 'required',
            'adress' => 'required|min:8',
            'phone' => 'required|numeric',
            'years_exp' => 'required|numeric',
            'date' => 'required|date',
            'type_blood' => 'required|min:2'
        ];
    }
}
