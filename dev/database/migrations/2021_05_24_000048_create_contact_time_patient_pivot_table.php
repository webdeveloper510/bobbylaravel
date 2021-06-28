<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTimePatientPivotTable extends Migration
{
    public function up()
    {
        Schema::create('contact_time_patient', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id', 'patient_id_fk_3936970')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('contact_time_id');
            $table->foreign('contact_time_id', 'contact_time_id_fk_3936970')->references('id')->on('contact_times')->onDelete('cascade');
        });
    }
}
