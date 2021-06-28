<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCrosTable extends Migration
{
    public function up()
    {
        Schema::create('cros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cro_name')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
