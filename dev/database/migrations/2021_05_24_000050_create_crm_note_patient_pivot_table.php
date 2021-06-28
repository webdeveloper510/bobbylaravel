<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmNotePatientPivotTable extends Migration
{
    public function up()
    {
        Schema::create('crm_note_patient', function (Blueprint $table) {
            $table->unsignedBigInteger('crm_note_id');
            $table->foreign('crm_note_id', 'crm_note_id_fk_3993634')->references('id')->on('crm_notes')->onDelete('cascade');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id', 'patient_id_fk_3993634')->references('id')->on('patients')->onDelete('cascade');
        });
    }
}
