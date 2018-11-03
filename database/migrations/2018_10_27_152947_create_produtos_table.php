<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grupo_produtos_id')->unsigned();
            $table->integer('unidade_id')->unsigned();
            $table->foreign('grupo_produtos_id')->references('id')->on('grupo_produtos');
            $table->foreign('unidade_id')->references('id')->on('unidade_produtos');
            $table->string('codigo_produto', 10);
            $table->string('descricao', 30);
            $table->float('estoque', 8, 2);
            $table->float('preco_custo', 8, 2);
            $table->float('preco_venda', 8, 2);
            $table->string('ativo', 1);
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
        Schema::dropIfExists('produtos');
    }
}
