<?php

namespace App\Http\Requests\Job_posting;

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
            'title' => 'max:255',
            'experience' => 'max:255',
            'type' => 'max:255',
            'skill' => 'max:255',
            'required' => 'max:255',
            'salary' => 'numeric'
        ];
    }
    public function messages()
    {
        return [
            'title.max' => ':attribute more than 255 characters',
            'experience.max' => ':attribute more than 255 characters',
            'type.max' => ':attribute more than 255 characters',
            'skill.max' => ':attribute more than 255 characters',
            'required.max' => ':attribute more than 255 characters',
            'salary.numeric' => ':attribute is number',
        ];
    }
}
