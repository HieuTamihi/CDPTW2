<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CRUDUserRequests extends FormRequest
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
            'email' => 'required|email|min:10|max:255',
            'phone' => 'required|nullable|regex:/(^([0-9]+) {10} ?$)/u',
            'password' => 'required|min:6',
            'role' => 'required',
            'status' => 'required',
        ];
    }
    public function messages()
    {
        return [

            'email.required' => __('email không được để trống.'),
            'email.email' => __('email phải là @.'),
            'email.min' => __('email phải hơn 10 ký tự.'),
            'email.max' => __('email phải không được vượt quá 255 ký tự.'),

            'phone.required' => __('phone không được để trống.'),
            'phone.nullable' => __('phone không được để trống.'),
            'phone.regex' => __('phone là chử số không được vược quá 10 ký tự.'),

            'password.required' => 'password không được để trống.',
            'password.min' => 'không đước ít hơn 6 ký tự',

            'role' => 'role không được để trống.',
            'status' => 'status không được để trống.',
        ];
    }
}
