<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTypesTable extends Migration
{
    public function up()
    {
        Schema::create('answer_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('answer_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
