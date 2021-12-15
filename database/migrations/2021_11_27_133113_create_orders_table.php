<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('user_id')->unsigned();
            $table->string('customer_name')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->integer('item_total')->nullable();
            $table->integer('items_total_befor')->nullable();
            $table->integer('items_total_after')->nullable();
            $table->string('notes')->nullable();
            $table->string('pay_method')->nullable();
            $table->integer('paid')->nullable();
            $table->integer('rest')->nullable();
            $table->enum('type',['sell','bounce'])->default('sell');
            $table->integer('bou_number')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
