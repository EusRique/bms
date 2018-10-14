<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('admin.produto.index');
    }

    public function grupos()
    {
        return view('admin.produto.grupos');
    }

    public function cadastrar(){
        return view('admin.produto.cadastrar-editar');
    }
}
