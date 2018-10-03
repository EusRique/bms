<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    
    $this->get('cliente', 'ClientController@index')->name('admin.cliente');
    
    $this->get('movimentacaoFinanceira', 'FinancialController@index')->name('admin.financial'); 
    
    $this->get('/', 'AdminController@index')->name('admin.home');
});

$this->get('/', 'Site\SiteController@index')->name('home'); 

Auth::routes();