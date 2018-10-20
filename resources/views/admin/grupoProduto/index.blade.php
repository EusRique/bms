@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Grupo de Produtos</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Dashboard</a></li>
        <li><a href="#">Grupo de Produtos</a></li>
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
                                    <form action="{{ route('grupoProduto.search') }}" class="form form-inline" role="form" method="POST">
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
                                            @foreach($ativos as $key => $ativo)
                                                <option value="{{$key}}">{{ $ativo }}</option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('grupoProduto.cadastrar-editar') }}" class="btn btn-success">
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
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                        @foreach($grupos as $grupo)
                        <tr>
                            <td>{{$grupo->id}}</td>
                            <td>{{$grupo->codigo}}</td>
                            <td>{{$grupo->descricao}}</td>
                            <td>{{$grupo->situacaoGrupo($grupo->situacao)}}</td>
                            <td>
                                <div class="text-center">
                                    <a href="{{ route('grupoProduto.visualizar', $grupo->id) }}" class="btn btn btn-info">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a href="{{ route('grupoProduto.editar', $grupo->id) }}" class="btn btn btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form style='display: inline-block;' method="POST" action="{{ route('grupoProduto.deletar', $grupo->id) }}"
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
                    {!! $grupos->appends($dataForm)->links() !!}
                @else
                    {!! $grupos->links() !!}
                @endif
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="<?php echo asset('css/bms.css')?>" type="text/css">
@stop