<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('patient')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('height_ft')->nullable();
            $table->string('height_in')->nullable();
            $table->string('weight')->nullable();
            $table->integer('bmi')->nullable();
            $table->string('zip_code')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
