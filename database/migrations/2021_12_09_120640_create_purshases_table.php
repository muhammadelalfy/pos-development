<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurshasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purshases', function (Blueprint $table) {
            $table->increments('id');

            $table->string('Invoice_Number')->nullable();
            $table->string('Invoice_Issue_Data')->nullable();
            $table->string('Date_of_Supply')->nullable();
            $table->string('Name')->nullable();
            $table->string('Building_No')->nullable();
            $table->string('Street_Name')->nullable();
            $table->string('District')->nullable();
            $table->string('City')->nullable();
            $table->string('Country')->nullable();
            $table->string('Additional')->nullable();
            $table->string('Postal_Code')->nullable();
            $table->string('VAT_No')->nullable();
            $table->string('Other_ID')->nullable();
            $table->string('Details_of_goods')->nullable();
            $table->integer('total_without_tax')->nullable();
            $table->integer('discount_total')->nullable();
            $table->integer('Excluding_VAT')->nullable();
            $table->integer('Total_VAT')->nullable();
            $table->integer('Total_Amount_Due')->nullable();
            $table->enum('type',['purshas','bounce'])->default('purshas');
            $table->integer('bou_number')->nullable();

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
        Schema::dropIfExists('purshases');
    }
}
