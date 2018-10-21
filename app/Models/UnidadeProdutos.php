<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class UnidadeProdutos extends Model
{
    protected $fillable = [
        'nome',
        'sigla',
        'ativo'
    ];

    public function situacaoUnidadeProduto()
    {
        $ativo = $this->ativo;

        if ($ativo == 0)
            return 'Bloqueado';
        else
            return 'Ativo';
        
        return $ativo;
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
