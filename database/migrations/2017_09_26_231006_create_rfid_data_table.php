<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRfidDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rfid_data', function (Blueprint $table) {
            $table->integer('id');
            $table->string('rfid_number',15);
            $table->integer('sap_id');
            $table->string('firstname_lastname',255);
            $table->date('date_stamp');
            $table->time('time_stamp');
            $table->string('reader_location',2);
            $table->string('reader_status',2);
            $table->string('reader_door',5);
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
        Schema::dropIfExists('rfid_data');
    }
}
