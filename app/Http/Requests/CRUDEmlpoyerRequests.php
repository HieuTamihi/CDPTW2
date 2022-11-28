<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CRUDEmlpoyerRequests extends FormRequest
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
            'website' => 'required|min:5|max:255',
            'infor' => 'required|min:5',
            'responsibility' => 'required|min:5',
            'welfare' => 'required|min:5|max:255',
            'name_company' => 'required|regex:/(^([a-zA-z]+)?$)/u|min:5|max:255',
            'address' => 'required|min:5',
            'image' => 'mimes:jpeg,jpg,png,gif|required|max:255',
            'email' => 'required|email|min:5|max:255',
            'phone_number' => 'required|nullable|regex:/(^([0-9]+) {10} ?$)/u',


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

            'website.required' => __('Bạn chưa nhập website.'),
            'website.min' => __('website phải hơn 5 ký tự.'),
            'website.max' => __('website phải không được vượt quá 255 ký tự.'),

            'infor.required' => __('Bạn chưa nhập infor.'),
            'infor.min' => __('infor phải hơn 5 ký tự.'),

            'responsibility.required' => __('Bạn chưa nhập responsibility.'),
            'responsibility.min' => __('responsibility phải hơn 5 ký tự.'),

            'welfare.required' => __('Bạn chưa nhập welfare.'),
            'welfare.min' => __('skill phải hơn 5 ký tự.'),

            'name_company.required' => __('Bạn chưa nhập name_company.'),
            'name_company.min' => __('name_company phải hơn 5 ký tự.'),
            'name_company.max' => __('name_company phải không được vượt quá 255 ký tự.'),
            'name_company.regex' => __('name_company không có ký tự đặt biệt.'),

            'address.max' => __('Bạn chưa nhập address.'),
            'address.min' => __('address phải hơn 5 ký tự.'),

            'image.required' => __('image không được để trống.'),
            'image.mimes' => __('image phải là jpeg, jpg, png, gif.'),
            'image.max' => __('image phải không được vượt quá 255 ký tự.'),

            'email.required' => __('image không được để trống.'),
            'email.email' => __('email phải là @.'),
            'email.min' => __('email phải hơn 5 ký tự.'),
            'email.max' => __('email phải không được vượt quá 255 ký tự.'),

            'phone_number.required' => __('image không được để trống.'),
            'phone_number.nullable' => __('image không được để trống.'),
            'phone_number.regex' => __('phone_number là chử số không được vược quá 10 ký tự.'),
        ];
    }
}