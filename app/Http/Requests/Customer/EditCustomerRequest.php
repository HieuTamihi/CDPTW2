<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class EditCustomerRequest extends FormRequest
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
            'email' => 'email|required',
            'phone_number' => 'required|numeric|min:10',
            'fullname' => 'required|max:50',
            'date' => 'required',
            'address' => 'required|max:255',
            'gender' => 'required',
            'favorite' => 'max:255',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Please entrer :attribute',
            'email.email' => 'Please enter the correct email format',
            'phone_number.required' => 'Please entrer :attribute',
            'phone_number.min' => ':attribute is 10 character',
            'fullname.required' => 'Please entrer :attribute',
            'fullname.max' => ':attribute max is 50 character',
            'date.required' => 'Please entrer :attribute',
            'address.required' => 'Please entrer :attribute',
            'address.max' => ':attribute max is 255 character',
            'favorite.max' => ':attribute max is 255 character',
        ];   
    }
}
