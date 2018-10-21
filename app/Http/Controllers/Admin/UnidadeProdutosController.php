<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UnidadeProdutos;
use App\Http\Requests\Painel\UnidadeProdutoFormRequest;

class UnidadeProdutosController extends Controller
{   
    private $unidadeProdutos;
    private $totalPage = 15;

    public function __construct(UnidadeProdutos $unidadeProdutos)
    {
        $this->unidadeProdutos = $unidadeProdutos;
    }

    public function index()
    {
        $unidades = $this->unidadeProdutos->paginate($this->totalPage);

        $ativos = $this->cadastrar()->ativos;

        return view('admin.unidadeProdutos.index', compact('unidades', 'ativos'));
    }

    public function cadastrar()
    {
        $ativos = [
            '0' => 'Bloqueado',
            '1' => 'Ativo'
        ];

        return view('admin.unidadeProdutos.cadastrar-editar', compact('ativos'));
    }

    public function adicionar(Request $request)
    {
        $unidadeProdutos = $request->all();

        $insert = $this->unidadeProdutos->create($unidadeProdutos);

        if($insert)
            return redirect()->route('admin.unidadeProdutos');
        else
            return redirect()->back();
    }

    public function visualizar($id)
    {
        $unidadeProdutos = $this->unidadeProdutos->find($id);

        return view('admin.unidadeProdutos.visualizar', compact('unidadeProdutos'));
    } 

    public function editar($id)
    {
        $unidadeProdutos = $this->unidadeProdutos->find($id);

        $ativos = $this->cadastrar()->ativos;

        return view('admin.unidadeProdutos.cadastrar-editar', compact('unidadeProdutos', 'ativos'));
    }

    public function atualizar(UnidadeProdutoFormRequest $request, $id)
    {
        $dataForm = $request->all();

        $unidadeProdutos = $this->unidadeProdutos->find($id);

        $update = $unidadeProdutos->update($dataForm);

        if($update)
            return redirect()->route('admin.unidadeProdutos');
        else
            return redirect()->route('unidadeProdutos.atualizar', $id)->with(['errors' => 'Não foi possível editar']);
    }

    public function deletar($id)
    {
        $unidadeProdutos = $this->unidadeProdutos->find($id);

        $delete = $unidadeProdutos->delete();
        
        if ($delete)
            return redirect()->route('admin.unidadeProdutos');
        else
            return redirect()->route('admin.unidadeProdutos', $id)->with(['Falha ao excluir registro']);
    }

    public function searchUnidade(Request $request, UnidadeProdutos $unidadeProdutos)
    {
        $dataForm = $request->except('_token');

        $unidades = $unidadeProdutos->search($dataForm, $this->totalPage);

        $ativos = $this->cadastrar()->ativos;

        return view('admin.unidadeProdutos.index', compact('dataForm', 'unidades', 'ativos'));
    }
}
