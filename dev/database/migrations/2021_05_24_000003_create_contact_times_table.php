<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactTimesTable extends Migration
{
    public function up()
    {
        Schema::create('contact_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_time')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
