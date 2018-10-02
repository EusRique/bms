@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Movimento Financeiro</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-calendar-plus-o"></i></span>
                
                <div class="info-box-content">
                    <span class="info-box-text">A receber hoje</span>
                    <span class="info-box-number">0,00</span>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-thumbs-up"></i></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Receb. em Atraso</span>
                    <span class="info-box-number">0,00</span>
                </div>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-calendar-times-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">A pagar hoje</span>
                        <span class="info-box-number">0,00</span>
                    </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-thumbs-down"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Pago Atrasado</span>
                    <span class="info-box-number">0,000</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <div class="box-header">
                        <h3 class="box-title">Responsive Hover Table</h3>
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
                                    <th><input type="checkbox"></th>
                                    <th>Tipo</th>
                                    <th>Categoria</th>
                                    <th>Vencimento</th>
                                    <th>Descrição</th>
                                    <th>Pessoa</th>
                                    <th>Valor</th>
                                    <th>Baixado</th>
                                </tr>
                                <tr>
                                    <td><input type="checkbox"></td>
                                    <td><i class="fa fa-circle-o text-red"></i></td>
                                    <td>Aluguel</td>
                                    <td>01/10/2018 <span class="label label-danger">Vencido</span></td>
                                    <td>Pagamento efetuado referente a aluguel do imóvel</td>
                                    <td>Henrique</td>
                                    <td>20,00</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        <ul class="pagination">
                            <li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
                            <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li>
                            <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li>
                            <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>      
        </div>
    </div>
@stop