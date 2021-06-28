<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToIndicationPatientsTable extends Migration
{
    public function up()
    {
        Schema::table('indication_patients', function (Blueprint $table) {
            $table->unsignedBigInteger('patient_id')->nullable();
            $table->foreign('patient_id', 'patient_fk_3993606')->references('id')->on('patients');
            $table->unsignedBigInteger('indication_id')->nullable();
            $table->foreign('indication_id', 'indication_fk_3937140')->references('id')->on('indications');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993628')->references('id')->on('users');
        });
    }
}
