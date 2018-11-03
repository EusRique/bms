@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produto</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Dashboard</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="#">Visualizar</a></li>
    </ol>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Produto</h3>
        </div>    
        <div id="main" class="container-fluid">
            <h3 class="page-header">{{$visualizar->descricao}}</h3>
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Código</strong></p>
                    <p>{{$visualizar->codigo_produto}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Descrição</strong></p>
                    <p>{{$visualizar->descricao}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Grupo</strong></p>
                    <p>{{$visualizar->grupos->descricao}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Unidade</strong></p>
                    <p>{{$visualizar->unidades->sigla}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Estoque</strong></p>
                    <p>{{$visualizar->estoque}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Preço de Custo</strong></p>
                    <p>{{$visualizar->preco_custo}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Preço de Venda</strong></p>
                    <p>{{$visualizar->preco_venda}}</p>
                </div>
                <div class="col-md-12">
                    <p><strong>Status</strong></p>
                    <p>{{$visualizar->situacaoProduto($visualizar->ativo)}}</p>
                </div>
            </div>
            <hr />
            <div id="actions" class="row">
                <div class="col-md-12">
                    <a href="{{route('admin.produto')}}" class="btn btn btn-info">
                        <i class="fa fa-sign-out"></i>
                    </a>
                    <a href="{{route('produto.editar', $visualizar->id)}}" class="btn btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                    <form style='display: inline-block;' method="POST" action="{{route('produto.deletar', $visualizar->id)}}"
                        onsubmit=" return confirm('Confirma exclusão?')">
                        {{method_field('DELETE')}}{{csrf_field()}}
                        <button type="submit" class="btn btn btn-danger"><i class="fa fa-close"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
