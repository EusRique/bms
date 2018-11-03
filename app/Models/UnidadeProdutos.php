<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Produtos;
use DB;

class UnidadeProdutos extends Model
{
    protected $fillable = [
        'nome',
        'sigla',
        'ativo'
    ];

    public function produtos()
    {
        $this->hasMany(Produto::class, 'id', 'grupo_produtos_id');
    }

    public function situacaoUnidadeProduto()
    {
        $ativo = $this->ativo;

        if ($ativo == 0)
            return 'Bloqueado';
        else
            return 'Ativo';
        
        return $ativo;
    }

    public function listaUnidade()
    {
        $unidade = UnidadeProdutos::all();

        return $unidade;
    }

    public function search(Array $data, $totalPage)
    {
        $unidadeProdutos = $this->where(function ($query) use ($data) {
            
            if(isset($data['id']))
                $query->where('id', $data['id']);
            
            if(isset($data['nome']))
                $query->where('nome', $data['nome']);
            
            if(isset($data['sigla']))
                $query->where('sigla', $data['sigla']);
            
            if(isset($data['ativo']))
                $query->where('ativo', $data['ativo']);
        })
        ->paginate($totalPage);

        return $unidadeProdutos;
    }
}
