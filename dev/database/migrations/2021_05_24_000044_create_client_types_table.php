<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientTypesTable extends Migration
{
    public function up()
    {
        Schema::create('client_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
