<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->integer('manu_id');
            $table->integer('type_id');
            $table->double('price');
            $table->string('image');
            $table->text('description');
            $table->integer('feature');
            $table->double('sale');
            $table->integer('likes')->nullable();
            $table->timestamps();
            $table->foreign('manu_id')->references('id')->on('manufactures');
            $table->foreign('type_id')->references('id')->on('protypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
