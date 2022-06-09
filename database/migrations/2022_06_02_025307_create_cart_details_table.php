<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('qty');
            $table->foreign('product_id')->references('id')->on('products')
                ->onUpdate('cascade')->onDelete('set null');
            $table->unsignedBigInteger('cart_id')->nullable();
            $table->foreign('cart_id')->references('id')->on('carts')
                ->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('cart_details');
    }
}
