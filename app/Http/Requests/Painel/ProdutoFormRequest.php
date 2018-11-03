<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRequest extends FormRequest
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
            'codigo_produto'    => 'required',
            'descricao'         => 'required',
            //'grupo_produto_id'  => 'required',
            //'unidade_id'        => 'required',
            'estoque'           => 'required',
            'preco_custo'       => 'required',
            'preco_venda'       => 'required'
        ];
    }

    public function messages()
    {
        return [
            'codigo_produto'    => 'O campo código é de preenchimento obrigatório',
            'descricao'         => 'O campo descrição é de preenchimento obrigatório',
            //'grupo_produto_id'  => 'O campo grupo de produto é de preenchimento obrigatório',
            //'unidade_id'        => 'O campo unidade é de preenchimento obrigatório',
            'estoque'           => 'O campo estoque é de preenchimento obrigatório',
            'preco_custo'       => 'O campo preço de custo é de preenchimento obrigatório',
            'preco_venda'       => 'O campo preco de venda é de preenchimento obrigatório'
        ];
    }
}
