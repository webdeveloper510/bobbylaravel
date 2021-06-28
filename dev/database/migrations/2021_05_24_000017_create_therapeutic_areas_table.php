<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTherapeuticAreasTable extends Migration
{
    public function up()
    {
        Schema::create('therapeutic_areas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('therapeutic_area')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
