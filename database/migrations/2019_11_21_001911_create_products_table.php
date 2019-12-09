<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('nombre', 100);
          $table->string('precio', 100);
          $table->string('descripcion', 1000);
          $table->timestamps();
          $table->bigInteger('categoria_id')->unsigned();
          $table->string('poster', 255);
          $table->foreign('categoria_id')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
