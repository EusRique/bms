@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Grupo de Produtos</h1>
    @if(isset($grupo))
        <ol class="breadcrumb">
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="#">Grupo de Produtos</a></li>
            <li><a href="#">Atualizar</a></li>
        </ol>
    @else
        <ol class="breadcrumb">
            <li><a href="/admin">Dashboard</a></li>
            <li><a href="#">Grupo de Produtos</a></li>
            <li><a href="#">Cadastrar</a></li>
        </ol>
    @endif
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Grupo de Produtos</h3>
            @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>
        @if(isset($grupo))
        <form action="{{ route('grupoProduto.atualizar', $grupo->id) }}" method="POST">
                {!! method_field('PUT') !!}
        @else
        <form action="{{ route('grupoProduto.adicionar') }}" method="POST">
        @endif
            {!! csrf_field() !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Código</label>
                                <input type="text" name="codigo" id="codigo" class="form-control" value="{{$grupo->codigo or old('codigo')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Descrição</label>
                                <input type="text" name="descricao" id="descricao" class="form-control" value="{{$grupo->descricao or old('descricao')}}">              
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
                            <select name="situacao" id="situacao" class="form-control">
                                @foreach($ativos as $key => $ativo)
                                    <option value="{{$key}}"
                                        @if(isset($grupo) && $grupo->situacao == $key)
                                            selected
                                        @endif;
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
