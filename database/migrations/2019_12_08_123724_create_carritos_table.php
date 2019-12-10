<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->unsignedBiginteger('user_id')->unsigned();
            $table->unsignedBiginteger('product_id')->unsigned();
            $table->string('precio', 100);
            $table->string('nombre', 100);
            $table->string('descripcion', 1000);
            $table->integer('cantidad');
            $table->boolean('estadoDeCompra');
            $table->string('image_product', 500);
            $table->integer('sumCant');
            // $table->foreign('product_id')->references('id')->on('products');
            // $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
