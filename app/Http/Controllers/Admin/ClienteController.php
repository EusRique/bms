<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClienteController extends Controller
{
    public function index()
    {
        return view('admin.cliente.index');
    }

    public function cadastrar()
    {
        return view('admin.cliente.cadastrar');
    }
}
