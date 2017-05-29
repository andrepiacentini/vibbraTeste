<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AvaliacaoRequest extends Request
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

            'internet' => 'required',
            'velocidade' => 'required',
            'comidas' => 'required',
            'bebibas' => 'required',
            'acomodacoes' => 'required',
            'acomodacoes' => 'required',
            'count_attendance' => 'required',
            'count_value' => 'required',
            'count_confort' => 'required',
            'general_noise' => 'required',
            'general_evaluation' => 'required',
            'tipo_internet' => 'required',


        ];

    }

    public function messages()
    {
        return [
            'internet.required' => 'Por favor, preencha o campo internet',
            'velocidade.required' => 'Por favor, preencha o campo velocidade',
            'comidas.required' => 'Por favor, preencha o campo comidas',
            'bebibas.required' => 'Por favor, preencha o campo bebibas',
            'acomodacoes.required' => 'Por favor, preencha o campo acomodacoes',
            'count_attendance.required' => 'Por favor, preencha o campo Qualidade do atendimento',
            'count_value.required' => 'Por favor, preencha o campo Preço - Nível de valor',
            'count_confort.required' => 'Por favor, preencha o campo Conforto - Nível de qualidade',
            'general_noise.required' => 'Por favor, preencha o campo Ruído (Barulho) - Nível de ruído',
            'general_evaluation.required' => 'Por favor, preencha o campo Avaliação geral',
            'tipo_internet.required' => 'Por favor, preencha o campo tipo internet',

        ];
    }

}
