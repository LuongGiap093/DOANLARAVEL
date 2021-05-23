<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->engine = "InnoDB";
			$table->Increments('order_id')->unsigned();  
            $table->float('order_total')->nullable();
            $table->string('order_payment')->nullable();
            $table->integer('order_status')->nullable();
            $table->timestamps();
            $table->integer('customer_id')->unsigned()->nullable();
            $table->foreign('customer_id')->references('customer_id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
