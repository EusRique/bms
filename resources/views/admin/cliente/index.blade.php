@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Dashboard</a></li>
        <li><a href="">Clientes</a></li>
    </ol>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <div class="container">
                    <div class="row">
                        <div id="filter-panel" class="collapse filter-panel">
                            <div class="panel cliente-panel panel-default">
                                <div class="panel-body">
                                    <form action="{{ route('cliente.search') }}" class="form form-inline" role="form" method="POST">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <input type="text" name="id" class="form-control" placeholder="ID">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="nome" class="form-control" placeholder="Nome | Razão Social">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="sobrenome" class="form-control" placeholder="Sobrenome | Nome Fantasia">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="cpf_cnpj" class="form-control" placeholder="CPF | CNPJ">
                                        </div>
                                        <div class="form-group">
                                            <select name="tipo_pessoa" id="pref-perpage" class="form-control">
                                                <option value="">-- Pessoa --</option>
                                                @foreach($tipoPessoas as $key => $pessoa)
                                                    <option value="{{$key}}">{{ $pessoa }} </option>
                                                @endforeach
                                            </select>                                
                                        </div>
                                        <div class="form-group">
                                            <select name="ativo" id="pref-perpage" class="form-control">
                                                <option value="">-- Status --</option>
                                                @foreach($ativos as $key => $ativo)
                                                    
                                                    <option value="{{$key}}">{{ $ativo }}</option>
                                                @endforeach;
                                            </select>                                
                                        </div>
                                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('cliente.cadastrar-editar') }}" class="btn btn-success">
                            <i class="fa fa-plus"></i>Adicionar
                        </a>   
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
                            <span class="glyphicon glyphicon-cog"></span> Buscar
                        </button>
                    </div>
                </div>
                
                @if(isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <p>{{$error}}</p>
                        @endforeach
                    </div>
                @endif
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Nome | Razão Social</th>
                            <th>Tipo</th>
                            <th>CPF | CNPJ</th>
                            <th>email</th>
                            <th>Telefone</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->sobrenome }}</td>
                            <td>{{ $cliente->tipoPessoa($cliente->tipo_pessoa) }}</td>
                            <td>{{ $cliente->cpf_cnpj }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->telefone }}</td>
                            <td>{{ $cliente->ativo($cliente->ativo) }}</td>
                            <td>
                                <div class="text-center">
                                    <a href="{{ route('cliente.visualizar', $cliente->id) }}" class="btn btn btn-info"><i class="fa fa-search"></i></a>
                                    <a href="{{ route('cliente.editar', $cliente->id) }}" class="btn btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <form style='display: inline-block;' method="POST" action="{{ route('cliente.deletar', $cliente->id)}}"
                                        onsubmit=" return confirm('Confirma exclusão?')">
                                        {{method_field('DELETE')}}{{csrf_field()}}
                                        <button type="submit" class="btn btn btn-danger"><i class="fa fa-close"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @if(isset($dataForm))
                    {!! $clientes->appends($dataForm)->links() !!}
                @else
                    {!! $clientes->links() !!}
                @endif
            </div>
        </div>
    </div>
</div>
 <link rel="stylesheet" href="<?php echo asset('css/bms.css')?>" type="text/css">
@stop