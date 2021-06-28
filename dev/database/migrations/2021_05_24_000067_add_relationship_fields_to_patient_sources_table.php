<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPatientSourcesTable extends Migration
{
    public function up()
    {
        Schema::table('patient_sources', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id', 'patient_fk_3993604')->references('id')->on('patients');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_3937111')->references('id')->on('orders');
            $table->unsignedBigInteger('order_patient_id')->nullable();
            $table->foreign('order_patient_id', 'order_patient_fk_3937112')->references('id')->on('order_patients');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993626')->references('id')->on('users');
        });
    }
}
