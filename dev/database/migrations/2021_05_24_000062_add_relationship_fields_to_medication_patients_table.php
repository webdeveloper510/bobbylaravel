<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToMedicationPatientsTable extends Migration
{
    public function up()
    {
        Schema::table('medication_patients', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id', 'patient_fk_3993607')->references('id')->on('patients');
            $table->unsignedBigInteger('medication_id')->nullable();
            $table->foreign('medication_id', 'medication_fk_3937131')->references('id')->on('medications');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993629')->references('id')->on('users');
        });
    }
}
