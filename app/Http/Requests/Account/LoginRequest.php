<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    : array{
        return [
            'email'    => 'bail||required|email',
            'password' => [
                'required',
            ],
        ];
    }

    public function messages(){
        return [
            'email.required'    => 'Vui lòng nhập vào email',
            'email.email'       => 'Email chưa đúng định dạng',
            'password.required' => 'Vui lòng nhập vào mật khẩu',
        ];
    }
}
