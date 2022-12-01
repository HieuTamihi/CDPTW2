<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CRUDCustomersRequests extends FormRequest
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
            'phone_number' => 'required|nullable|max:10',
            'fullname' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'date' => 'required|date',
            'gender' => 'required|regex:/(^([0-9]+)?$)/u|min:1|max:11',
            'favorite' => 'required|min:10|max:255',
            'status' => 'required|regex:/(^([0-9]+)?$)/u|min:1|max:11',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'fullname.required' => __('Bạn chưa nhập fullname.'),
            'fullname.min' => __('fullname phải hơn 5 ký tự.'),
            'fullname.max' => __('fullname phải không được vượt quá 255 ký tự.'),

            'address.required' => __('Bạn chưa nhập address.'),
            'address.min' => __('address phải hơn 5 ký tự.'),
            'address.max' => __('address phải không được vượt quá 255 ký tự.'),

            'favorite.required' => __('Bạn chưa nhập favorite.'),
            'favorite.min' => __('favorite phải hơn 5 ký tự.'),
            'favorite.max' => __('favorite phải không được vượt quá 255 ký tự.'),

            'email.required' => __('email không được để trống.'),
            'email.email' => __('email phải là @.'),
            'email.min' => __('email phải hơn 10 ký tự.'),
            'email.max' => __('email phải không được vượt quá 255 ký tự.'),

            'phone_number.required' => __('phone_number không được để trống.'),
            'phone_number.nullable' => __('phone_number chỉ là chữ số.'),
            'phone_number.max' => __('phone_number là chử số không được vược quá 10 chữ số.'),

            'status.required' => __('status không được để trống.'),
            'status.regex' => __('status chỉ là chữ số.'),
            'status.min' => __('status phải hơn 1 ký tự.'),
            'status.max' => __('status phải không được vượt quá 11 ký tự.'),

            'gender.required' => __('gender không được để trống.'),
            'gender.min' => __('gender phải hơn 1 ký tự.'),
            'gender.max' => __('gender phải không được vượt quá 11 ký tự.'),
            'gender.regex' => __('gender là chử số không được vược quá 10 ký tự.'),
        ];
    }
}