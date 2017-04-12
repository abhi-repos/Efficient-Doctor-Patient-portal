<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment_informations', function (Blueprint $table)
         {
            $table->increments('appointment_id');
            $table->string('start_time',50);
            $table->string('end_time',50);
            $table->integer('patient_id');
            $table->integer('doctor_id');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment_informations');
    }
}
