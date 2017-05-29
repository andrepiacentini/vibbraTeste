<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request
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

            'email' => 'required|email',
            'password' => 'required',

        ];

    }

    public function messages()
    {
        return [
            'email.required' => 'Por favor, preencha o campo email',
            'email.email' => 'Por favor, insira um email válido',
            'password.required' => 'Por favor, preencha o campo senha',
          ];
    }
}
