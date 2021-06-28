<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDefaultQuestionsTable extends Migration
{
    public function up()
    {
        Schema::table('default_questions', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_3937143')->references('id')->on('orders');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993622')->references('id')->on('users');
        });
    }
}
