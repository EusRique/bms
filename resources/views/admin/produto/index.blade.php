@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Dashboard</a></li>
        <li><a href="#">Produtos</a></li>
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
                                    <form action="" class="form form-inline" role="form" method="POST">
                                        {!! csrf_field() !!}
                                        <div class="form-group">
                                            <input type="text" name="id" class="form-control" placeholder="ID">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="codigo" class="form-control" placeholder="Código">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="descricao" class="form-control" placeholder="Nome | Razão Social">
                                        </div>
                                        <select name="situacao" id="pref-perpage" class="form-control">
                                            <option value="">-- Situação --</option>
                                            
                                                <option value=""></option>
                                            
                                        </select>
                                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('produto.cadastrar')}}" class="btn btn-success">
                            <i class="fa fa-plus"></i>Adicionar
                        </a>   
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
                            <span class="glyphicon glyphicon-cog"></span> Buscar
                        </button>
                    </div>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Grupo</th>
                            <th>Unidade</th>
                            <th>Estoque</th>
                            <th>P. Custo</th>
                            <th>Vl. Venda</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                        @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->id}}</td>
                            <td>{{$produto->codigo_produto}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->grupos->descricao}}</td>
                            <td>{{$produto->unidades->sigla}}</td>
                            <td>{{$produto->estoque}}</td>
                            <td>{{$produto->preco_custo}}</td>
                            <td>{{$produto->preco_venda}}</td>
                            <td>{{$produto->situacaoProduto($produto->ativo)}}</td>
                            <td>
                                <div class="text-center">
                                    <a href="{{route('produto.visualizar', $produto->id)}}" class="btn btn btn-info">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="{{route('produto.editar', $produto->id)}}" class="btn btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form style='display: inline-block;' method="POST" action="{{route('produto.deletar', $produto->id)}}"
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
<link rel="stylesheet" href="<?php echo asset('css/bms.css')?>" type="text/css">
@stop