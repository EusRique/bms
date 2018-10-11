<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_pessoa', 1)->nullable();
            $table->string('nome', 30)->nullable();
            $table->string('sobrenome', 30)->nullable();
            $table->string('cpf_cnpj', 20)->nullable();
            $table->string('rg_ie', 20)->nullable();
            $table->string('nascimento_im', 20)->nullable();
            $table->string('endereco', 30)->nullable();
            $table->string('numero', 20)->nullable();
            $table->string('complemento', 30)->nullable();
            $table->string('bairro', 30)->nullable();
            $table->string('cidade', 30)->nullable();
            $table->string('estado', 30)->nullable();
            $table->string('pais', 30)->nullable();
            $table->string('cep', 20)->nullable();
            $table->string('telefone', 20)->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('email', 30)->nullable();
            $table->string('contato', 30)->nullable();
            $table->string('ativo', 1)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
