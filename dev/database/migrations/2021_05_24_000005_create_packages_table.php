<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('package')->nullable();
            $table->integer('price')->nullable();
            $table->integer('duration')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
