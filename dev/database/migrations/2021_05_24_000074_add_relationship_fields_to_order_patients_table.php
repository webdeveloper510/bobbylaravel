<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrderPatientsTable extends Migration
{
    public function up()
    {
        Schema::table('order_patients', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id', 'patient_fk_3937051')->references('id')->on('patients');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_3937052')->references('id')->on('orders');
            $table->unsignedBigInteger('patient_status_id')->nullable();
            $table->foreign('patient_status_id', 'patient_status_fk_3937053')->references('id')->on('patient_statuses');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993620')->references('id')->on('users');
        });
    }
}
