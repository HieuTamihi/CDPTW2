<?php

namespace App\Http\Requests\Job_posting;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|max:255',
            'experience' => 'required|max:255',
            'type' => 'required|max:255',
            'skill' => 'required|max:255',
            'required' => 'required|max:255',
            'salary' => 'required|numeric'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Please enter :attribute',
            'title.max' => ':attribute more than 255 characters',
            'experience.required' => 'Please enter :attribute',
            'experience.max' => ':attribute more than 255 characters',
            'type.required' => 'Please enter :attribute',
            'type.max' => ':attribute more than 255 characters',
            'skill.required' => 'Please enter :attribute',
            'skill.max' => ':attribute more than 255 characters',
            'required.required' => 'Please enter :attribute',
            'required.max' => ':attribute more than 255 characters',
            'salary.required' => 'Please enter :attribute',
            'salary.numeric' => ':attribute is number',
        ];
    }
}
