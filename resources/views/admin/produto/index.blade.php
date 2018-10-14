@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Produtos</h1>
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
                                            <input type="text" name="nome" class="form-control" placeholder="Nome | Razão Social">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="" class="btn btn-success">
                            <i class="fa fa-plus"></i>Adicionar
                        </a>   
                        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
                            <span class="glyphicon glyphicon-cog"></span> Buscar
                        </button>
                    </div>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <!--<table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Código</th>
                            <th>Descrição</th>
                            <th>Situação</th>
                            <th>Ações</th>
                        </tr>
                        
                        <tr>
                            <td>1</td>
                            <td>0001</td>
                            <td>Descrição</td>
                            <td>Situação</td>
                            <td>
                                <div class="text-center">
                                    <a href="" class="btn btn btn-info"><i class="fa fa-search"></i></a>
                                    <a href="" class="btn btn btn-warning"><i class="fa fa-edit"></i></a>
                                    <form style='display: inline-block;' method="POST" action=""
                                        onsubmit=" return confirm('Confirma exclusão?')">
                                        {{method_field('DELETE')}}{{csrf_field()}}
                                        <button type="submit" class="btn btn btn-danger"><i class="fa fa-close"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>-->
            </div>
        </div>
    </div>
</div>
@stop