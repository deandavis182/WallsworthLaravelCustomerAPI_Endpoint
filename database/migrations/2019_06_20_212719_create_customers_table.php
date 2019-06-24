<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    

    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name', 40);
            $table->string('Address');
            $table->string('Phone_Number', 25);
            $table->string('Email_Address');
            $table->dateTime('Start_Date');
            $table->date('Contract_Start_Date');
            $table->integer('Contract_Length'); // Will be inputing # of weeks
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
        Schema::dropIfExists('customers');
    }
}
