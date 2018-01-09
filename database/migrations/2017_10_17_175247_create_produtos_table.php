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
          $table->string('foto',255);
          $table->string('nome',100);
          $table->decimal('preco',8,2);
          $table->integer('id_categoria')->references('id')->on('categorias');
          $table->integer('estoque');
          $table->integer('estoque_min');
          $table->boolean('frete_gratis');
          $table->float('peso');
          $table->text('descricao');
          $table->boolean('disponivel');
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
