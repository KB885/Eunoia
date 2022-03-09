<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoginRequest extends FormRequest
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
            'email' => 'required|string|email|max:128',
            'password' => 'required|string|max:64'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'An email address is required',
            'email.max' => 'There is a limit on 128 characters',
            'password.required' => 'A password is required',
            'password.max' => 'There is a limit on 64 characters',
        ];
    }
}
