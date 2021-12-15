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
            $table->increments('id');
            $table->integer('purshase_id')->unsigned();
            $table->integer('including_VAT')->nullable();
            $table->integer('Tax_Amount')->nullable();
            $table->integer('Tax_rate')->nullable();
            $table->integer('Discount')->nullable();
            $table->integer('Taxable_Amount')->nullable();
            $table->integer('Quantity')->nullable();
            $table->integer('Unite_Price')->nullable();
            $table->timestamps();
            $table->foreign('purshase_id')->references('id')->on('purshases')->nullable();

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
