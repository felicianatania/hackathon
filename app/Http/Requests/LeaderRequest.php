<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LeaderRequest extends FormRequest
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
            'fullname' => 'required',
            'email' => 'required|email',
            'WA' => ['required', 'min:9', 'string'],
            'lineId' => 'required',
            'github' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required|date|before:-17 years',
            'CV' => 'required|mimes:jpg,jpeg,png,pdf',
            'IdCard' => 'required|mimes:jpg,jpeg,png,pdf',
        ];
    }
}
