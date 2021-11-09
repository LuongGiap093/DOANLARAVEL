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
        Schema::create('product', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->Increments('id')->unsigned();
            $table->string('name');
            $table->string('image');
            $table->string('price');
            $table->string('discount')->default(0);
            $table->text('content')->nullable();
            $table->text('describe')->nullable();
            $table->longText('link')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->integer('idcat')->unsigned();
            $table->foreign('idcat')->references('id')->on('category');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('brand_id')->on('brands');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
