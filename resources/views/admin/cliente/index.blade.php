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
                <a href="{{ route('cliente.cadastrar') }}" class="btn btn-success"><i class="fa fa-plus"></i>
                    Adicionar
                </a>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
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
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Henrique</td>
                            <td>Física</td>
                            <td>Henrique</td>
                            <td>h.camargo@gmail.com</td>
                            <td>(41)9 98500692</td>
                            <td>Ativo</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 </div>
@stop
