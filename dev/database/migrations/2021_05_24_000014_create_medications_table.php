<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicationsTable extends Migration
{
    public function up()
    {
        Schema::create('medications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand_name')->nullable();
            $table->string('sponsor_name')->nullable();
            $table->string('application_number')->nullable();
            $table->string('dosage_form')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
