<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    /*Primeiro parametro URL, segundo nome da função e terceiro nome pasta arquivo.blade.php (GET)
    e quando for POST o parametro passado no form*/
    
    $this->get('cadastrarGrupo', 'ProdutoController@cadastrar')->name('produto.cadastrar-editar');
    $this->get('grupoProdutos', 'ProdutoController@grupos')->name('produto.grupos');
    $this->get('produtos', 'ProdutoController@index')->name('admin.produto');

    $this->any('clientes-search', 'ClienteController@searchCliente')->name('cliente.search');
    $this->delete('clientes/deletar/{id}', 'ClienteController@deletar')->name('cliente.deletar');
    $this->put('clientes/editar/{id}', 'ClienteController@atualizar')->name('atualizar');
    $this->get('clientes/editar/{id}', 'ClienteController@editar')->name('cliente.editar');
    $this->get('clientes/visualizar/{id}', 'ClienteController@visualizar')->name('cliente.visualizar');
    $this->post('clientes/cadastrar', 'ClienteController@adicionar')->name('adicionar');
    $this->get('clientes/cadastrar', 'ClienteController@cadastrar')->name('cliente.cadastrar-editar');
    $this->get('clientes', 'ClienteController@index')->name('admin.cliente');
    
    $this->get('movimentacaoFinanceira', 'FinanceiroController@index')->name('admin.financeiro'); 
    
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home'); 

Auth::routes();