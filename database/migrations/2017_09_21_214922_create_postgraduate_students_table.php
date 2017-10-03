<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('division_id',10);
            $table->string('title_id',10);
            $table->string('thai_name'255);
            $table->string('eng_name'255);
            $table->string('institute_medical',255);
            $table->string('institute_resident',255);
            $table->string('sap_id',10);
            $table->string('doctor_cert',6);
            $table->string('nation_id',50);
            $table->string('member',255);
            $table->string('telephone',10);
            $table->string('e_mail',255);
            $table->string('year',20);
            $table->string('year_study',4);
            $table->string('remark',255);
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
        Schema::dropIfExists('students');
    }
}
