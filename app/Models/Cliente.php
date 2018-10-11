<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Cliente extends Model
{
    protected $fillable = [
        'tipo_pessoa', 
        'nome', 
        'sobrenome', 
        'cpf_cnpj', 
        'rg_ie', 
        'nascimento_im', 
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'pais',
        'cep',
        'telefone',
        'celular',
        'email',
        'contato',
        'ativo'
    ];
    
    public function tipoPessoa($tipo_pessoa = null)
    {
        $tipo_pessoa = $this->tipo_pessoa;

        if ($tipo_pessoa == 'f' ) {
             
            return 'Física'; 
        
        } else {
            return 'Jurídica';
        }

        return $tipo_pessoa;
    }

    public function ativo($ativo = null)
    {
        $ativo = $this->ativo;

        if ($ativo == 0) {
            
            return 'Bloqueado';
        }

        else {

            return 'Ativo';
        }

        return $ativo;
    }
}
