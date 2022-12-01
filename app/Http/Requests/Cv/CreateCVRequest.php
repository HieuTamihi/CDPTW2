<?php

namespace App\Http\Requests\Cv;

use Illuminate\Foundation\Http\FormRequest;

class CreateCVRequest extends FormRequest
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
            'namecv' => 'required|max:255',
            'fullname' => 'required|max:255',
            'avatar' => 'required|max:2048',
            'apply_position' => 'required|max:255',
            'email' => 'required|email',
            'phone_number' => 'numeric|digits:10',
            'date' => 'required',
            'introduce' => 'max:255',
            'exp_work' => 'max:255',
            'school_name' => 'required|max:255',
            'learn_time' => 'required|max:255',
            'majors' => 'required|max:255',
            'infor_other' => 'max:255',
        ];
    }
    public function messages()
    {
        return [
            'namecv.required' => 'Please enter :attribute',
            'namecv.max' => ':attribute max is 255 character',
            'fullname.required' => 'Please enter :attribute',
            'fullname.max' => ':attribute max is 255 character',
            'avatar.required' => 'Please enter :attribute',
            'avatar.max' => ':attribute max is 2048 KB',
            'apply_position.required' => 'Please enter :attribute',
            'apply_position.max' => ':attribute max is 255 character',
            'email.required' => 'Please enter :attribute',
            'email.email' => 'Please enter correct format :attribute',
            'phone_number.required' => 'Please enter :attribute',
            'phone_number.numeric' => 'Please enter :attribute is number',
            'phone_number.digits' => ':attribute is 10',
            'date.required' => 'Please enter :attribute',
            'introduce.max' => ':attribute max is 255 character',
            'exp_work.max' => ':attribute max is 255 character',
            'school_name.required' => 'Please enter :attribute',
            'school_name.max' => ':attribute max is 255 character',
            'learn_time.required' => 'Please enter :attribute',
            'learn_time.max' => ':attribute max is 255 character',
            'majors.required' => 'Please enter :attribute',
            'majors.max' => ':attribute max is 255 character',
            'infor_other.max' => ':attribute max is 255 character',
        ];
    }
}
