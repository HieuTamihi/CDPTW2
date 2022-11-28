<?php

namespace App\Http\Requests\Cv;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCVRequest extends FormRequest
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
            'namecv' => 'max:255',
            'fullname' => 'max:255',
            'avatar' => 'max:2048',
            'apply_position' => 'max:255',
            'email' => 'email',
            'phone_number' => 'numeric|digits:10',
            'introduce' => 'max:255',
            'exp_work' => 'max:255',
            'school_name' => 'max:255',
            'learn_time' => 'max:255',
            'majors' => 'max:255',
            'infor_other' => 'max:255',
        ];
    }
    public function messages()
    {
        return [
            'namecv.max' => ':attribute max is 255 character',
            'fullname.max' => ':attribute max is 255 character',
            'avatar.max' => ':attribute max is 2048 KB',
            'apply_position.max' => ':attribute max is 255 character',
            'email.email' => 'Please enter correct format :attribute',
            'phone_number.numeric'=> 'Please enter :attribute is number',
            'phone_number.digits'=> ':attribute is 10',
            'introduce.max' => ':attribute max is 255 character',
            'exp_work.max' => ':attribute max is 255 character',
            'school_name.max' => ':attribute max is 255 character',
            'learn_time.max' => ':attribute max is 255 character',
            'majors.max' => ':attribute max is 255 character',
            'infor_other.max' => ':attribute max is 255 character',
        ];
    }
}
