<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPatientsTable extends Migration
{
    public function up()
    {
        Schema::create('order_patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('diagnosis')->default(0)->nullable();
            $table->boolean('other_clinical_trials')->default(0)->nullable();
            $table->boolean('qualified')->default(0)->nullable();
            $table->string('dnq_reason')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
