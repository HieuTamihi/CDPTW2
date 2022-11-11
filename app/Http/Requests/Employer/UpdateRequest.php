<?php

namespace App\Http\Requests\Employer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name_company' => 'max:255',
            'image_upload' => 'image',
            'email' => 'email',
            'phone_number' => 'numeric|min:10',
            'address' => 'max:255',
            'website' => 'max:255',
            'infor' => 'max:255',
            'responsibility' => 'max:255',
            'welfare' => 'max:255',
        ];
    }
    public function messages()
    {
        return [
            'name_company.max' => ':attribute more than 255 character',
            'image_upload.image' => ':attribute is fortmat image',
            'email.email' => ':attribute is fortmat email',
            'phone_number.numeric' => ':attribute is number',
            'phone_number.min' => ':attribute more than 10 character',
            'address.max' => ':attribute more than 255 character',
            'website.max' => ':attribute more than 255 character',
            'infor.max' => ':attribute more than 255 character',
            'responsibility.max' => ':attribute more than 255 character',
            'welfare.max' => ':attribute more than 255 character',
        ];
    }
}
