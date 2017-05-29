<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EstabelecimentoRequest extends Request
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

            'nome' => 'required',
            'endereco' => 'required',
            'uf' => 'required',
            'pais' => 'required',
            'tipo' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'nome.required' => 'Por favor, preencha o campo nome',
            'endereco.required' => 'Por favor, preencha o campo endereco',
            'uf.required' => 'Por favor, preencha o campo uf',
            'pais.required' => 'Por favor, preencha o campo pais',
            'tipo.required' => 'Por favor, preencha o campo tipo',
            ];
    }


}
