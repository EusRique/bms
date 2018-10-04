<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    //Primeiro parametro URL, segundo nome da função e terceiro nome pasta e arquivo.blade.php

    $this->get('cadastrar', 'ClienteController@cadastrar')->name('cliente.cadastrar');
    $this->get('clientes', 'ClienteController@index')->name('admin.cliente');
    
    $this->get('movimentacaoFinanceira', 'FinanceiroController@index')->name('admin.financeiro'); 
    
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home'); 

Auth::routes();