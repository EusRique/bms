@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produto</h1>
    @if(isset($produto))
        <ol class="breadcrumb">
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Atualizar</a></li>
        </ol>
    @else
        <ol class="breadcrumb">
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="#">Produtos</a></li>
            <li><a href="#">Cadastrar</a></li>
        </ol>
    @endif
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Produtos</h3>
            @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>
        @if(isset($produto))
        <form action="{{ route('produto.atualizar', $produto->id) }}" method="POST">
            {!! method_field('PUT') !!}
        @else
        <form action="{{route('produto.adicionar')}}" method="POST">
        @endif
            {!! csrf_field() !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Código Produto</label>
                                <input type="text" name="codigo_produto" id="codigo_produto" class="form-control" value="{{$produto->codigo_produto or old('codigo_produto')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" name="descricao" id="descricao" class="form-control" value="{{$produto->descricao or old ('descricao')}}">              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Grupo</label>
                            <select name="grupo_produtos_id" id="grupo_produtos_id" class="form-control">
                                <option>-- Selecione --</option>
                                @foreach($listaGrupos as $listaGrupo)
                                    <option value="{{$listaGrupo->id}}"
                                        @if(isset($produto) && $produto->grupos->id == $listaGrupo->id)
                                            selected
                                        @endif;
                                    >{{$listaGrupo->descricao}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Unidade</label>
                            <select name="unidade_id" id="unidade_id" class="form-control">
                                <option>-- Selecione -- </option>
                                @foreach($listaUnidades as $listaUnidade)
                                    <option value="{{$listaUnidade->id}}"
                                        @if(isset($produto) && $produto->unidades->id == $listaUnidade->id)    
                                            selected
                                        @endif
                                    >{{$listaUnidade->nome}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Estoque</label>
                                <input type="text" name="estoque" id="estoque" class="form-control" value="{{$produto->estoque or old('estoque')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Preço de custo</label>
                                <input type="text" name="preco_custo" id="preco_custo" class="form-control" value="{{$produto->preco_custo or old('preco_custo')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Preço de venda</label>
                                <input type="text" name="preco_venda" id="preco_venda" class="form-control" value="{{$produto->preco_venda or old('preco_venda')}}">              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Situação</label>
                            <select name="ativo" id="ativo" class="form-control">
                                @foreach($ativos as $key => $ativo)
                                    <option value="{{$key}}"
                                    @if(isset($produto) && $produto->ativo == $key)
                                        selected
                                    @endif
                                    >{{$ativo}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body form-group">
                <button type="submit" class="btn btn-success">Cadastrar</button>
            </div>
        </form>
    </div>
@stop
