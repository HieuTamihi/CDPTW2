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
            'post_title' => 'required|min:10|max:100|',
            'post_content' => 'required|min:50|max:7000',
            'post_image' => 'required|image|mimes:jpg,png,jpeg|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'post_title.required' => ':attribute field is required',
            'post_title.min' => ':attribute must be at least 10 characters.',
            'post_title.max' => ':attribute cannot be more than 100 characters.',

            'post_content.required' => ':attribute field is required',
            'post_content.min' => ':attribute must be at least 50 characters.',
            'post_content.max' => ':attribute cannot be more than 7000 characters.',

            'post_image.required' => ':attribute field is required',
            'post_image.image' => ':attribute must be an image.',
            'post_image.mimes' => ':attribute must be a file of type: jpg, png, jpeg.',
            'post_image.max' => ':attribute the size can not be more than 2MB.',
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
