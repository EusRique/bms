@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('cliente.cadastrar-editar') }}" class="btn btn-success">
                    <i class="fa fa-plus"></i>Adicionar
                </a>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
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
                            <th>Tipo</th>
                            <th>Contato</th>
                            <th>email</th>
                            <th>Telefone</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nome }}</td>
                            <td>{{ $cliente->tipoPessoa($cliente->tipo_pessoa) }}</td>
                            <td>{{ $cliente->contato }}</td>
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
            </div>
        </div>
    </div>
 </div>
@stop
