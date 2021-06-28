<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmNotePatientStatusPivotTable extends Migration
{
    public function up()
    {
        Schema::create('crm_note_patient_status', function (Blueprint $table) {
            $table->unsignedBigInteger('crm_note_id');
            $table->foreign('crm_note_id', 'crm_note_id_fk_3993633')->references('id')->on('crm_notes')->onDelete('cascade');
            $table->unsignedBigInteger('patient_status_id');
            $table->foreign('patient_status_id', 'patient_status_id_fk_3993633')->references('id')->on('patient_statuses')->onDelete('cascade');
        });
    }
}
