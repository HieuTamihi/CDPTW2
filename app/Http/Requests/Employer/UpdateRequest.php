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
            'name_company' => 'required|max:255',
            'image_upload' => 'image|mimes:jpeg,png|mimetypes:image/jpeg,image/png|max:1024',
            'email' => 'required|email',
            'phone_number' => 'required|numeric|digits:10',
            'address' => 'required|max:255',
            'website' => 'required|max:255',
            'infor' => 'required|max:255',
            'responsibility' => 'required|max:255',
            'welfare' => 'required|max:255',
        ];
    }
    public function messages()
    {
        return [
            'name_company.required' => 'Please enter :attribute',
            'email.required' => 'Please enter :attribute',
            'phone_number.required' => 'Please enter :attribute',
            'address.required' => 'Please enter :attribute',
            'website.required' => 'Please enter :attribute',
            'infor.required' => 'Please enter :attribute',
            'responsibility.required' => 'Please enter :attribute',
            'welfare.required' => 'Please enter :attribute',
            'name_company.max' => ':attribute more than 255 character',
            'image_upload.image' => ':attribute is fortmat image',
            'image_upload.mimes' => ':attribute is fortmat image',
            'image_upload.max' => ':attribute over load files',
            'email.email' => ':attribute is fortmat email',
            'phone_number.numeric' => ':attribute is number',
            'phone_number.digits' => ':attribute more than 10 character',
            'address.max' => ':attribute more than 255 character',
            'website.max' => ':attribute more than 255 character',
            'infor.max' => ':attribute more than 255 character',
            'responsibility.max' => ':attribute more than 255 character',
            'welfare.max' => ':attribute more than 255 character',
        ];
    }
}
