<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCTRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required|numeric|digits:10',
            'password' => 'required|confirmed|min:6',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Please enter :attribute',
            'email.email' => ':attribute is format email',
            'phone.required' => 'Please enter :attribute',
            'phone.numeric' => ':attribute is number',
            'phone.digits' => ':attribute more than 10 character',
            'password.required' => 'Please enter :attribute',
            'password.confirmed' => ':attribute is correct',
            'password.min' => ':attribute more than 6 character',
        ];
    }
}
