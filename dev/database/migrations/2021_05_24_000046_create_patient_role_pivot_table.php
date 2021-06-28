<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientRolePivotTable extends Migration
{
    public function up()
    {
        Schema::create('patient_role', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id', 'patient_id_fk_3936962')->references('id')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id', 'role_id_fk_3936962')->references('id')->on('roles')->onDelete('cascade');
        });
    }
}
