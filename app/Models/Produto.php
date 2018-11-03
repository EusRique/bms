<?php

namespace App\Models;
use App\Models\GrupoProduto;
use App\Models\UnidadeProdutos;
use Illuminate\Database\Eloquent\Model;

use DB;

class Produto extends Model
{
    protected $fillable = [
        'grupo_produtos_id',
        'unidade_id',  
        'codigo_produto',   
        'descricao',
        'estoque',
        'preco_custo',
        'preco_venda',
        'ativo'
    ];

    public function grupos()
    {
        return $this->hasOne(GrupoProduto::class, 'id', 'grupo_produtos_id');
    }

    public function unidades()
    {
        return $this->hasOne(UnidadeProdutos::class, 'id', 'unidade_id');
    }

    public function situacaoProduto($ativo = null)
    {
        $ativo = $this->ativo;

        if ($ativo == 0) {
            
            return 'Bloqueado';
        
        } else {
            
            return 'Ativo';
        }
        
        return $ativo;
    }
}
