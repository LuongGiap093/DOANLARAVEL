<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('order_details_id')->unsigned();
            $table->integer('quantity')->nullable();
            $table->string('unit_price')->nullable();
            $table->string('total_price')->nullable();
            $table->timestamps();

            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('order_id')->on('order');
            $table->integer('id')->unsigned()->nullable();
            $table->foreign('id')->references('id')->on('product');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
