<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CadastroRequest extends Request
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

            'email' => 'required|unique:users',
            'nome' => 'required',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',

        ];

    }

    public function messages()
    {
        return [
            'email.required' => 'Por favor, preencha o campo email',
            'email.unique' => 'email já cadastrado em nossa base de dados',
            'nome.required' => 'Por favor, preencha o campo nome',

            'confirmar_senha.required' => 'Por favor, preencha o campo Confirmar senha',
            'password.required' => 'Por favor,preencha o campo senha',
            'password.min' => 'Senha deve ter no minímo 6 caracteres',
            'password.confirmed' => 'Senha não confere',
            'password_confirmation.min' => 'Confirmação de Senha deve ter no minímo 6 caracteres',
            'password_confirmation.required' => 'Por favor, preencha o campo confirmar senha',

        ];
    }
}
