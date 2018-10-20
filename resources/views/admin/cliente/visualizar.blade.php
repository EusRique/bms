@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
    <ol class="breadcrumb">
        <li><a href="/admin">Dashboard</a></li>
        <li><a href="#">Clientes</a></li>
        <li><a href="#">Visualizar</a></li>
    </ol>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Cliente</h3>
        </div>    
        <div id="main" class="container-fluid">
            <h3 class="page-header">{{$cliente->nome}}</h3>
            <div class="row">
                <div class="col-md-4">
                    <p><strong>Tipo Pessoa</strong></p>
                    <p>{{$cliente->tipoPessoa($cliente->tipo_pessoa)}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Nome | Razão Social</strong></p>
                    <p>{{$cliente->nome}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Sobrenome | Nome Fantasia</strong></p>
                    <p>{{$cliente->sobrenome}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>CPF | CNPJ</strong></p>
                    <p>{{$cliente->cpf_cnpj}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>RG | Inscrição Estadual</strong></p>
                    <p>{{$cliente->rg_ie}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Data Nascimento | IE</strong></p>
                    <p>{{$cliente->nascimento_im}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Endereço</strong></p>
                    <p>{{$cliente->endereco}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Número</strong></p>
                    <p>{{$cliente->numero}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Complemento</strong></p>
                    <p>{{$cliente->complemento}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Bairro</strong></p>
                    <p>{{$cliente->bairro}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Cidade</strong></p>
                    <p>{{$cliente->cidade}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Estado</strong></p>
                    <p>{{$cliente->estado}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Pais</strong></p>
                    <p>{{$cliente->pais}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>CEP</strong></p>
                    <p>{{$cliente->cep}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Telefone</strong></p>
                    <p>{{$cliente->telefone}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Celular</strong></p>
                    <p>{{$cliente->celular}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Email</strong></p>
                    <p>{{$cliente->email}}</p>
                </div>
                <div class="col-md-4">
                    <p><strong>Contato</strong></p>
                    <p>{{$cliente->contato}}</p>
                </div>
                <div class="col-md-8">
                    <p><strong>Status</strong></p>
                    <p>{{$cliente->ativo($cliente->ativo)}}</p>
                </div>
            </div>
            <hr />
            <div id="actions" class="row">
                <div class="col-md-12">
                    <a href="{{ route('admin.cliente') }}" class="btn btn btn-info"><i class="fa fa-sign-out"></i></a>
                    <a href="{{ route('cliente.editar', $cliente->id) }}" class="btn btn btn-warning"><i class="fa fa-edit"></i></a>
                    <form style='display: inline-block;' method="POST" action="{{ route('cliente.deletar', $cliente->id)}}"
                        onsubmit=" return confirm('Confirma exclusão?')">
                        {{method_field('DELETE')}}{{csrf_field()}}
                        <button type="submit" class="btn btn btn-danger"><i class="fa fa-close"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
