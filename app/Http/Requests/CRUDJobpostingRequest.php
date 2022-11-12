<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CRUDJobpostingRequest extends FormRequest
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
            'title' => 'required|unique:posts|min:5|max:255',
            'experience' => 'required|min:5|max:255',
            'type' => 'required|min:5|max:255',
            'skill' => 'required|min:5|max:255',
            'required' => 'required|min:5|max:255',
            'salary' => 'required|min:5|max:255'

        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [

            'title.required' => __('Bạn chưa nhập title.'),
            'title.min' => __('type phải hơn 5 ký tự.'),
            'title.max' => __('skill phải không được vượt quá 255 ký tự.'),
            'title.unique:posts' => __('title đã tòng tại.'),

            'experience.required' => __('Bạn chưa nhập experience.'),
            'experience.min' => __('experience phải hơn 5 ký tự.'),
            'experience.max' => __('experience phải không được vượt quá 255 ký tự.'),

            'type.required' => __('Bạn chưa nhập title.'),
            'type.min' => __('type phải hơn 5 ký tự.'),
            'type.max' => __('type phải không được vượt quá 255 ký tự.'),

            'skill.required' => __('Bạn chưa nhập experience.'),
            'skill.min' => __('skill phải hơn 5 ký tự.'),
            'skill.max' => __('skill phải không được vượt quá 255 ký tự.'),

            'required.min' => __('Bạn chưa nhập experience.'),
            'required.min' => __('required phải hơn 5 ký tự.'),
            'required.max' => __('required phải không được vượt quá 255 ký tự.'),

            'salary.max' => __('Bạn chưa nhập experience.'),
            'salary.min' => __('salary phải hơn 5 ký tự.'),
            'salary.max' => __('salary phải không được vượt quá 255 ký tự.'),
        ];
    }
}