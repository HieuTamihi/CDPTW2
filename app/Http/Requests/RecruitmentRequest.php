<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecruitmentRequest extends FormRequest
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
            'file' => 'required|mimes:pdf,docx|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'file.required' => 'The file is not in the correct format',
            'file.mimes' => 'The file is not in the correct format',
        ];
    }
}
