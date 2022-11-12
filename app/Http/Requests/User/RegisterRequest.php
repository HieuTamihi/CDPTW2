<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name_company' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'password' => 'required|confirmed|min:6',
        ];
    }
    public function messages()
    {
        return [
            'name_company.required' => 'Please enter :attribute',
            'address.required' => 'Please enter :attribute',
            'email.required' => 'Please enter :attribute',
            'email.email' => ':attribute is format email',
            'phone.required' => 'Please enter :attribute',
            'phone.numeric' => ':attribute is number',
            'phone.min' => ':attribute more than 10 character',
            'password.required' => 'Please enter :attribute',
            'password.confirmed' => ':attribute is correct',
            'password.min' => ':attribute more than 6 character',
        ];
    }
}
