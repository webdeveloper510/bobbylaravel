<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToStudiesTable extends Migration
{
    public function up()
    {
        Schema::table('studies', function (Blueprint $table) {
            $table->unsignedBigInteger('indication_id')->nullable();
            $table->foreign('indication_id', 'indication_fk_3937098')->references('id')->on('indications');
            $table->unsignedBigInteger('sponsor_id')->nullable();
            $table->foreign('sponsor_id', 'sponsor_fk_3937092')->references('id')->on('sponsors');
            $table->unsignedBigInteger('protocol_id')->nullable();
            $table->foreign('protocol_id', 'protocol_fk_3937093')->references('id')->on('protocols');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_3937097')->references('id')->on('orders');
        });
    }
}
