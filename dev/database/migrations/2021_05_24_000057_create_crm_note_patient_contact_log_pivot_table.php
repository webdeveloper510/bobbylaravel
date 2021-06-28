<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrmNotePatientContactLogPivotTable extends Migration
{
    public function up()
    {
        Schema::create('crm_note_patient_contact_log', function (Blueprint $table) {
            $table->unsignedBigInteger('crm_note_id');
            $table->foreign('crm_note_id', 'crm_note_id_fk_3993631')->references('id')->on('crm_notes')->onDelete('cascade');
            $table->unsignedBigInteger('patient_contact_log_id');
            $table->foreign('patient_contact_log_id', 'patient_contact_log_id_fk_3993631')->references('id')->on('patient_contact_logs')->onDelete('cascade');
        });
    }
}
