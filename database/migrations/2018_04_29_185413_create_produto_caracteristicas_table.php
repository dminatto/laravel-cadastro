<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutoCaracteristicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_caracteristicas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_produto');
            $table->decimal('peso', 5, 2);
            $table->string('formato');
            $table->decimal('densidade', 5, 2);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_caracteristicas');
    }
}
