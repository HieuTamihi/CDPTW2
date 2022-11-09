<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostsRequest extends FormRequest
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
            'post_title' => 'required',
            'post_content' => 'required',
            'post_image' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'post_title.required' => ':attribute field is required',
            'post_content.required' => ':attribute field is required',
            'post_image.required' => ':attribute field is required'
        ];
    }
    public function attributes()
    {
        return [
            'post_title' => 'The title ',
            'post_content' => 'The content',
            'post_image' => 'The image'
        ];
    }
}
