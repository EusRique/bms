<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cliente;
use App\Http\Requests\Painel\ClienteFormRequest;

class ClienteController extends Controller
{
    private $cliente;

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }
    public function index()
    {
        $clientes = $this->cliente->all();

        return view('admin.cliente.index', compact('clientes'));
    }

    public function cadastrar()
    {
        $pessoas = [
            'f' => 'Pessoa Fisíca', 
            'j' => 'Pessoa Jurídica'
        ];

        $ativos = [
            '0' => 'Bloqueado',
            '1' => 'Ativo'
        ];

        return view('admin.cliente.cadastrar-editar', compact('pessoas', 'ativos'));
    }

    public function adicionar(ClienteFormRequest $request)
    {
        $cliente = $request->all();

        //$this->validate($request, $this->cliente->rules, $messages);
        
        $insert = $this->cliente->create($cliente);
        
        if($insert) 
            return redirect()->route('admin.cliente');
        else
            return redirect()->back();
    }

    public function visualizar($id)
    {
        $cliente = $this->cliente->find($id);
        
        return view('admin.cliente.visualizar', compact('cliente'));
    }

    public function editar($id)
    {
        $cliente = $this->cliente->find($id);

        $pessoas = [
            'f' => 'Pessoa Fisíca', 
            'j' => 'Pessoa Jurídica'
        ];

        $ativos = [
            '0' => 'Bloqueado',
            '1' => 'Ativo'
        ];

        return view('admin.cliente.cadastrar-editar', compact('pessoas', 'ativos', 'cliente'));
    }

    public function atualizar(ClienteFormRequest $request, $id)
    {
        $dataForm = $request->all();

        $cliente = $this->cliente->find($id);

        $update = $cliente->update($dataForm);

        if($update) 
            return redirect()->route('admin.cliente');
        else
            return redirect()->route('atualizar', $id)->with(['errors' => 'Não foi possível editar']);
    }

    public function deletar($id)
    {
        $cliente = $this->cliente->find($id);
        $delete = $cliente->delete();
        
        if($delete) 
            return redirect()->route('admin.cliente');
        else
            return redirect()->route('admin.cliente', $id)->with(['errors' => 'Falha ao excluir registro']);
    }
}
