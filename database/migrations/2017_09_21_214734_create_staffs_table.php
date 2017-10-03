<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sap_id',10);
            $table->string('emp_ranknake',10);
            $table->string('emp_firstname',100);
            $table->string('emp_lastname',100);
            $table->integer('emp_flag')->unsigned();
            $table->vachar('doctor_cert',6);
            $table->integer('position_type')->unsigned();
            $table->string('section',255);
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
        Schema::dropIfExists('staffs');
    }
}
