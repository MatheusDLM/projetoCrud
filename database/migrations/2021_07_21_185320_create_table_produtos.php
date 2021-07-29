<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProduto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criando tabela produtos no banco de dados
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->float('preco',10,2);
            $table->integer('quantidade');           
            $table->string('categoria');
            $table->string('status');
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
