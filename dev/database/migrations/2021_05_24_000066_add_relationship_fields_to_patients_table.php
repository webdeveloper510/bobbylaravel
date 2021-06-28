<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToPatientsTable extends Migration
{
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id', 'user_fk_3936971')->references('id')->on('users');
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id', 'gender_fk_3936967')->references('id')->on('genders');
            $table->unsignedBigInteger('ethnicity_id')->nullable();
            $table->foreign('ethnicity_id', 'ethnicity_fk_3936966')->references('id')->on('ethnicities');
            $table->unsignedBigInteger('distance_id')->nullable();
            $table->foreign('distance_id', 'distance_fk_3936968')->references('id')->on('distances');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993630')->references('id')->on('users');
        });
    }
}
