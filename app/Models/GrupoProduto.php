<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class GrupoProduto extends Model
{
    protected $fillable = [
        'codigo',
        'descricao',
        'situacao'
    ];

    public function situacaoGrupo($situacao = null)
    {
        $situacao = $this->situacao;

        if($situacao == 0) {

            return 'Bloqueado';
        
        } else {

            return 'Ativo';
        }

        return $situacao;
    }

    public function search(Array $data, $totalPage)
    {
        $grupos = $this->where(function ($query) use ($data) {
            
            if(isset($data['id']))
                $query->where('id', $data['id']);

            if(isset($data['codigo']))
                $query->where('codigo', $data['codigo']);
            
            if(isset($data['descricao']))
                $query->where('descricao', $data['descricao']);
            
            if(isset($data['situacao']))
                $query->where('situacao', $data['situacao']);
        })
        ->paginate($totalPage);
        //->toSql(); dd($grupos);
        
        return $grupos;
    }
}
