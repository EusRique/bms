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
             
            return 'Fisíca'; 
        
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

    public function search(Array $data, $totalPage)
    {
        $clientes =  $this->where(function ($query) use ($data) {

            if(isset($data['id']))
                $query->where('id', $data['id']);

            if (isset($data['nome']))
                $query->where('nome', $data['nome']);
            
            if (isset($data['sobrenome']))
                $query->where('sobrenome', $data['sobrenome']);
            
            if(isset($data['cpf_cnpj']))
                $query->where('cpf_cnpj', $data['cpf_cnpj']);

            if (isset($data['tipo_pessoa']))
                $query->where('tipo_pessoa', $data['tipo_pessoa']);
            
            if (isset($data['ativo']))
                $query->where('ativo', $data['ativo']);
        })
        ->paginate($totalPage);
        //->toSql(); dd($clientes);

        return $clientes;
    }
}
