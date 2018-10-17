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
}
