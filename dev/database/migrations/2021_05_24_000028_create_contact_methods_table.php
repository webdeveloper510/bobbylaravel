<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactMethodsTable extends Migration
{
    public function up()
    {
        Schema::create('contact_methods', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contact_method')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
