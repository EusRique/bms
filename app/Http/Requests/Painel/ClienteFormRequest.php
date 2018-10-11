<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ClienteFormRequest extends FormRequest
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
            'nome'      => 'required|min:3',
            'cpf_cnpj'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nome.required'      => 'O campo nome é de preenchimento obrigatório',
            'cpf_cnpj.required'  => 'O campo documento é de preenchimento obrigatório'
        ];
    }
}
