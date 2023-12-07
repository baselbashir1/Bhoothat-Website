<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'image' => ['nullable', 'image'],
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'عنوان البحث مطلوب',
            'content.required' => 'محتوى البحث مطلوب'
        ];
    }
}
