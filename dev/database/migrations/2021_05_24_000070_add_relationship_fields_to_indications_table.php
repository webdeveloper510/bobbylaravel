<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToIndicationsTable extends Migration
{
    public function up()
    {
        Schema::table('indications', function (Blueprint $table) {
            $table->unsignedBigInteger('therapeutic_area_id')->nullable();
            $table->foreign('therapeutic_area_id', 'therapeutic_area_fk_3937082')->references('id')->on('therapeutic_areas');
        });
    }
}
