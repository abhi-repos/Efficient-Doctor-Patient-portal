<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_informations', function (Blueprint $table) {
            $table->increments('patient_id');
            $table->string('username',50);
            $table->string('password',50);
            $table->string('email',50);
            $table->string('contact_number',50);
            $table->string('address',50);

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patient_informations');
    }
}
