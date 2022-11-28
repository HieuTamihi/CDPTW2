<?php

namespace App\Http\Requests\Employer;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'old_pass' => 'required|min:6',
            'new_pass' => 'required|confirmed|min:6',
            'new_pass_confirmation' => 'required|min:6',
        ];
    }
    public function messages()
    {
        return [
            'old_pass.required' => 'Please entrer :attribute',
            'old_pass.min' => ':attribute less than 6 character',
            'new_pass.required' => 'Please entrer :attribute',
            'new_pass.confirmed' => ':attribute is`t correct',
            'new_pass.min' => ':attribute less than 6 character',
            'new_pass_confirmation.required' => 'Please entrer :attribute',
            'new_pass_confirmation.min' => ':attribute less than 6 character',
        ];
    }
}
