<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    /*Primeiro parametro URL, segundo nome da função e terceiro nome pasta arquivo.blade.php (GET)
    e quando for POST o parametro passado no form*/
    
    $this->any('clientes-search', 'ClienteController@searchCliente')->name('cliente.search');
    $this->delete('deletar/{id}', 'ClienteController@deletar')->name('cliente.deletar');
    $this->put('editar/{id}', 'ClienteController@atualizar')->name('atualizar');
    $this->get('editar/{id}', 'ClienteController@editar')->name('cliente.editar');
    $this->get('visualizar/{id}', 'ClienteController@visualizar')->name('cliente.visualizar');
    $this->post('cadastrar', 'ClienteController@adicionar')->name('adicionar');
    $this->get('cadastrar', 'ClienteController@cadastrar')->name('cliente.cadastrar-editar');
    $this->get('clientes', 'ClienteController@index')->name('admin.cliente');
    
    $this->get('movimentacaoFinanceira', 'FinanceiroController@index')->name('admin.financeiro'); 
    
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home'); 

Auth::routes();