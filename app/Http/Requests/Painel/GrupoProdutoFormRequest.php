<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class GrupoProdutoFormRequest extends FormRequest
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
            'codigo'      => 'required',
            'descricao'   => 'required'
        ];
    }

    public function messages()
    {
        return [
            'codigo.required'      => 'O campo código é de preenchimento obrigatório',
            'descricao.required'   => 'O campo descricao é de preenchimento obrigatório'
        ];
    }
}
