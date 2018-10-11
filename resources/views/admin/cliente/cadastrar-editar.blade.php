@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Cliente</h3>
            @if(isset($errors) && count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                </div>
            @endif
        </div>
        @if(isset($cliente))
        <form action="{{ route('atualizar', $cliente->id) }}" method="POST">
            {!! method_field('PUT') !!}
        @else
        <form action="{{ route('adicionar') }}" method="POST">
        @endif
            {!! csrf_field() !!}
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tipo Pessoa</label>
                            <select name="tipo_pessoa" id="selecionar" class="form-control">
                                @foreach($pessoas as $key => $pessoa)
                                    <option data-section="{{$key}}" value="{{$key}}"
                                        @if(isset($cliente) && $cliente->tipo_pessoa == $pessoa)
                                            selected
                                        @endif;
                                    >{{$pessoa}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div data-name="f"><label>Nome</label></div>
                            <div data-name="j" class="hide"><label>Razão Social</label></div>
                            <input type="text" name="nome" id="nome" class="form-control" value="{{$cliente->nome or old('nome')}}">              
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div data-name="f"><label>Sobrenome</label></div>
                            <div data-name="j" class="hide"><label>Nome Fantasia</label></div>
                            <input type="text" name="sobrenome" id="sobrenome" class="form-control" value="{{$cliente->sobrenome or old('sobrenome')}}">              
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <div data-name="f"><label>CPF</label></div>
                                <div data-name="j" class="hide"><label>CNPJ</label></div>
                                <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control" value="{{$cliente->cpf_cnpj or old('cpf_cnpj')}}">                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <div data-name="f"><label>RG</label></div>
                                <div data-name="j" class="hide"><label>Inscrição Estadual</label></div>
                                <input type="text" name="rg_ie" id="rg_ie" class="form-control" value="{{$cliente->rg_ie or old('rg_ie')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <div data-name="f"><label>Data Nascimento</label></div>
                                <div data-name="j" class="hide"><label>Inscrição Estadual</label></div>
                                <input type="text" name="nascimento_im" id="nascimento_im" class="form-control" value="{{$cliente->nascimento_im or old('nascimento_im')}}">              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input type="text" name="endereco" id="endereco" class="form-control" value="{{$cliente->endereco or old('endereco')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Numero</label>
                                <input type="text" name="numero" id="numero" class="form-control" value="{{$cliente->numero or old('numero')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Complemento</label>
                                <input type="text" name="complemento" id="complemento" class="form-control" value="{{$cliente->complemento or old('complemento')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Bairro</label>
                                <input type="text" name="bairro" id="bairro" class="form-control" value="{{$cliente->bairro or old('bairro')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input type="text" name="cidade" id="cidade" class="form-control" value="{{$cliente->cidade or old('cidade')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" name="estado" id="estado" class="form-control" value="{{$cliente->estado or old('estado')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Pais</label>
                                <input type="text" name="pais" id="pais" class="form-control" value="{{$cliente->pais or old('pais')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>CEP</label>
                                <input type="text" name="cep" id="cep" class="form-control" value="{{$cliente->cep or old('cep')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Telefone</label>
                                <input type="text" name="telefone" id="telefone" class="form-control" value="{{$cliente->telefone or old('telefone')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Celular</label>
                                <input type="text" name="celular" id="celular" class="form-control" value="{{$cliente->celular or old('celular')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" id="email" class="form-control" value="{{$cliente->email or old('email')}}">              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-group">
                                <label>Contato</label>
                                <input type="text" name="contato" id="contato" class="form-control" value="{{$cliente->contato or old('contato')}}">              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Status</label>
                            <select name="ativo" id="ativo" class="form-control">
                                @foreach($ativos as $key => $ativo)
                                    <option value="{{$key}}"
                                        @if(isset($cliente) && $cliente->ativo == $key)
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo asset('js/cliente.js')?>"></script>
@stop
