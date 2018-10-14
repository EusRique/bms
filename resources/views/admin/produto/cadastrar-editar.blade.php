@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Grupo de Produtos</h1>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Grupo de Produtos</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" name="codigo" id="codigo" class="form-control" value="">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Descrição</label>
                            <input type="text" name="descricao" id="descricao" class="form-control" value="">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Situação</label>
                            <select name="" id="" class="form-control"> 
                                <option value="">Bloqueado</option>
                            </select>
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
                            <option value="0">Bloqueado</option>
                            <option value="1">Situação</option>
                        </select>
                    </div>
                </div>
            </div> 
        </div>
        <div class="box-body form-group">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </div>
@stop
