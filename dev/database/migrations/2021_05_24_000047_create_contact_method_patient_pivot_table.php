<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMethodPatientPivotTable extends Migration
{
    public function up()
    {
        Schema::create('contact_method_patient', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id', 'patient_id_fk_3936969')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('contact_method_id');
            $table->foreign('contact_method_id', 'contact_method_id_fk_3936969')->references('id')->on('contact_methods')->onDelete('cascade');
        });
    }
}
