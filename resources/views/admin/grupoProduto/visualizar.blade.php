@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Grupo de Produto</h3>
        </div>    
        <div id="main" class="container-fluid">
            <h3 class="page-header">{{$grupo->descricao}}</h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Código</strong></p>
                    <p>{{$grupo->codigo}}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Descrição</strong></p>
                    <p>{{$grupo->descricao}}</p>
                </div>
                <div class="col-md-8">
                    <p><strong>Situação</strong></p>
                    <p>{{$grupo->situacaoGrupo($grupo->situacao)}}</p>
                </div>
            </div>
            <hr />
            <div id="actions" class="row">
                <div class="col-md-12">
                    <a href="{{ route('admin.grupoProduto') }}" class="btn btn btn-info">
                        <i class="fa fa-sign-out"></i>
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
            </div>
        </div>
    </div>
@stop
