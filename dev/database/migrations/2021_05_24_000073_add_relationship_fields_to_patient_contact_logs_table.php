<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPatientContactLogsTable extends Migration
{
    public function up()
    {
        Schema::table('patient_contact_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('order_patient_id')->nullable();
            $table->foreign('order_patient_id', 'order_patient_fk_3937059')->references('id')->on('order_patients');
            $table->unsignedBigInteger('patient_status_id')->nullable();
            $table->foreign('patient_status_id', 'patient_status_fk_3937061')->references('id')->on('patient_statuses');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_3937060')->references('id')->on('users');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993625')->references('id')->on('users');
        });
    }
}
