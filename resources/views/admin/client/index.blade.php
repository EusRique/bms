@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
@stop

@section('content')
    <div class="box box-warning">
        <div class="box-header with-border">
            <h3 class="box-title">Cliente</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tipo Pessoa</label>
                        <select name="person" id="selecionar" class="form-control">
                            <option data-section="f" value="F">Pessoa Física</option>
                            <option data-section="j" value="J">Pessoa Jurídica</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div data-name="f" class="form-group">
                        <label>Nome</label>
                        <input type="text" name="name" id="name" class="form-control">              
                    </div>
                    <div data-name="j" class="form-group hide">
                        <label>Razão Social</label>
                        <input type="text" name="name" id="name" class="form-control">              
                    </div>
                </div>
                <div class="col-md-4">
                    <div data-name="f" class="form-group">
                        <label>Sobrenome</label>
                        <input type="text" name="fantasy" id="fantasy" class="form-control">              
                    </div>
                    <div data-name="j" class="form-group hide">
                        <label>Nome Fantasia</label>
                        <input type="text" name="fantasy" id="fantasy" class="form-control">              
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div data-name="f" class="form-group">
                            <label>CPF</label>
                            <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control">              
                        </div>
                        <div data-name="j" class="form-group hide">
                            <label>CNPJ</label>
                            <input type="text" name="cpf_cnpj" id="cpf_cnpj" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div data-name="f" class="form-group">
                            <label>RG</label>
                            <input type="text" name="rg_ie" id="rg_ie" class="form-control">              
                        </div>
                        <div data-name="j" class="form-group hide">
                            <label>Inscrição Estadual</label>
                            <input type="text" name="rg_ie" id="rg_ie" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div data-name="f" class="form-group">
                            <label>Data Nascimento</label>
                            <input type="text" name="birth_im" id="birth_im" class="form-control">              
                        </div>
                        <div data-name="j" class="form-group hide">
                            <label>Inscrição Municipal</label>
                            <input type="text" name="birth_im" id="birth_im" class="form-control">              
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
                            <input type="text" name="address" id="address" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Numero</label>
                            <input type="text" name="number" id="number" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Complemento</label>
                            <input type="text" name="complement" id="complement" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Bairro</label>
                            <input type="text" name="district" id="district" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="city" id="city" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="state" id="state" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Pais</label>
                            <input type="text" name="pais" id="pais" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>CEP</label>
                            <input type="text" name="cep" id="cep" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="text" name="phone" id="phone" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Celular</label>
                            <input type="text" name="cell_phone" id="cell_phone" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" id="email" class="form-control">              
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Contato</label>
                            <input type="text" name="contact" id="contact" class="form-control">              
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
                        <select name="person" id="selecionar" class="form-control">
                            <option value="1">Ativo</option>
                            <option value="0">Bloqueado</option>
                        </select>
                    </div>
                </div>
                
            </div> 
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo asset('js/functions.js')?>"></script>
@stop
