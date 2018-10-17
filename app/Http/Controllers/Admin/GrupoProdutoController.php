<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\GrupoProduto;
use App\Http\Requests\Painel\GrupoProdutoFormRequest;

class GrupoProdutoController extends Controller
{
    private $grupoProduto;

    public function __construct(GrupoProduto $grupoProduto)
    {
        $this->grupoProduto = $grupoProduto;
    }

    public function index()
    {
        $grupos = $this->grupoProduto->all();

        return view('admin.grupoProduto.index', compact('grupos'));
    }

    public function cadastrar()
    {
        $ativos = [
            '0' => 'Bloqueado',
            '1' => 'Ativo'
        ];

        return view('admin.grupoProduto.cadastrar-editar', compact('ativos'));
    }

    public function adicionar(Request $request)
    {
        $grupoProduto = $request->all();

        $insert = $this->grupoProduto->create($grupoProduto);

        if ($insert)
           return redirect()->route('admin.grupoProduto');        
        else 
            return redirect()->back();
    }

    public function visualizar($id)
    {
        $grupo = $this->grupoProduto->find($id);

        return view('admin.grupoProduto.visualizar', compact('grupo'));
    }

    public function editar($id)
    {
        $grupo = $this->grupoProduto->find($id);

        $ativos = [
            '0' => 'Bloqueado',
            '1' => 'Ativo'
        ];

        return view('admin.grupoProduto.cadastrar-editar', compact('grupo', 'ativos'));
    }

    public function atualizar(GrupoProdutoFormRequest $request, $id)
    {
        $dataForm = $request->all();

        $grupo = $this->grupoProduto->find($id);

        $update = $grupo->update($dataForm);

        if($update)
            return redirect()->route('admin.grupoProduto');
        else
            return redirect()->route('grupoProduto.atualizar', $id)->with(['errors' => 'Não foi possível editar']);
    }

    public function deletar($id)
    {
        $grupo = $this->grupoProduto->find($id);

        $delete = $grupo->delete();

        if($delete)
            return redirect()->route('admin.grupoProduto');
        else
            return redirect()->route('admin.grupoProduto', $id)->with(['errors' => 'Falha ao excluir registro']);
    }
}
