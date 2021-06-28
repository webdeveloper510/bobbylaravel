<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicationsTable extends Migration
{
    public function up()
    {
        Schema::create('indications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('indication')->nullable();
            $table->string('description')->nullable();
            $table->string('symptoms')->nullable();
            $table->string('causes')->nullable();
            $table->string('treatments')->nullable();
            $table->string('risk_factors')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
