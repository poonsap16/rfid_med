<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('activity_id')->nullable()->unsigned();
            $table->string('activity_name',100)->nullable();
            $table->string('activity_acronym',30)->nullable();
            $table->time('time_start')->nullable();
            $table->time('time_end')->nullable();
            $table->string('job_id',30)->nullable();
            $table->string('person_type',3)->nullable();
            $table->string('reader_location',2)->nullable();
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
        Schema::dropIfExists('activities');
    }
}
