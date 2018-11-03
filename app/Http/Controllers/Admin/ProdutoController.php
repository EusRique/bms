<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Painel\ProdutoFormRequest;
use App\Models\Produto;
use App\Models\GrupoProduto;
use App\Models\UnidadeProdutos;

class ProdutoController extends Controller
{
    private $produto;
    private $totalPage = 15;

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index()
    {
        $produtos = $this->produtos();

        return view('admin.produto.index', compact('produtos'));
    }

    public function produtos()
    {
        $listaProdutos = Produto::with('grupos', 'unidades')->get();

        return $listaProdutos;
    }

    public function cadastrar(GrupoProduto $grupos, UnidadeProdutos $unidades)
    {
        $listaGrupos = $grupos->listaGrupos();

        $listaUnidades = $unidades->listaUnidade();

        $ativos = [
            '0' => 'Bloqueado',
            '1' => 'Ativo'
        ];

        return view('admin.produto.cadastrar-editar', compact('listaGrupos', 'listaUnidades', 'ativos'));
    }

    public function adicionar(Request $request)
    {
        $produto = $request->all();

        $insert = $this->produto->create($produto);

        if ($insert)
            return redirect()->route('admin.produto');
        
        else
            return redirect()->back();
    }

    public function visualizar($id)
    {
        $produtos = $this->produtos(); 
        
        $visualizar = $produtos->find($id);
        
        return view('admin.produto.visualizar', compact('visualizar'));
    }

    public function editar(GrupoProduto $grupos, UnidadeProdutos $unidades, $id)
    {
        $listaGrupos = $grupos->listaGrupos();

        $listaUnidades = $unidades->listaUnidade();

        $resultado = $this->produtos();

        $produto = $resultado->find($id);
        
        $ativos = [
            '0' => 'Bloqueado',
            '1' => 'Ativo'
        ];

        return view('admin.produto.cadastrar-editar', compact('ativos', 'produto', 'listaGrupos', 'listaUnidades'));
    }

    public function atualizar(ProdutoFormRequest $request, $id)
    {
        $dataForm = $request->all();
        
        $produto = $this->produto->find($id);

        $update = $produto->update($dataForm);
        
        if($update)
            return redirect()->route('admin.produto');
        else
            return redirect()->route('produto.atualizar', $id)->with(['errors' => 'Não foi possível atualizar']);
    }

    public function deletar($id)
    {
        $produto = $this->produto->find($id);

        $delete = $produto->delete();

        if($delete) 
            return redirect()->route('admin.produto');
        else
            return redirect()->route('admin.produto', $id)->with(['errors' => 'Falha ao excluir registro']);
    }
}
