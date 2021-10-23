<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'username' => 'required',
            'mail' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required' => '氏名は必須です。',
            'mail.required' => 'メールは必須です。',
        ];
    }
}
