@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Unidade de Produto</h1>
    @if(isset($unidadeProdutos))
        <ol class="breadcrumb">
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="#">Unidade de Produto</a></li>
            <li><a href="#">Atualizar</a></li>
        </ol>
    @else
        <ol class="breadcrumb">
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="#">Unidade de Produto</a></li>
            <li><a href="#">Cadastrar</a></li>
        </ol>
    @endif
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Unidades de Produto</h3>
            @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>
        @if(isset($unidadeProdutos))
        <form action="{{ route('unidadeProdutos.atualizar', $unidadeProdutos->id) }}" method="POST">
            {!! method_field('PUT') !!}
        @else
        <form action="{{ route('unidadeProdutos.adicionar') }}" method="POST">
        @endif
            {!! csrf_field() !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" name="nome" id="nome" class="form-control" value="{{$unidadeProdutos->nome or old('Nome')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Sigla</label>
                                <input type="text" name="sigla" id="sigla" class="form-control" value="{{$unidadeProdutos->sigla or old('Sigla')}}">              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Situação</label>
                            <select name="ativo" id="ativo" class="form-control">
                                @foreach($ativos as $key => $ativo)
                                    <option value="{{$key}}"
                                        @if(isset($unidadeProdutos) && $unidadeProdutos->ativo == $key)
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
