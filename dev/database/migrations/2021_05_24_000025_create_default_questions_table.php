<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('default_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('birth_date')->default(0)->nullable();
            $table->boolean('zip_code')->default(0)->nullable();
            $table->boolean('gender')->default(0)->nullable();
            $table->boolean('ethnicity')->default(0)->nullable();
            $table->boolean('height')->default(0)->nullable();
            $table->boolean('weight')->default(0)->nullable();
            $table->boolean('diagnosis')->default(0)->nullable();
            $table->boolean('current_medications')->default(0)->nullable();
            $table->boolean('other_conditions')->default(0)->nullable();
            $table->boolean('other_clinical_trials')->default(0)->nullable();
            $table->boolean('contact_method')->default(0)->nullable();
            $table->boolean('contact_time')->default(0)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
