<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToCustomQuestionsTable extends Migration
{
    public function up()
    {
        Schema::table('custom_questions', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id')->nullable();
            $table->foreign('order_id', 'order_fk_3937160')->references('id')->on('orders');
            $table->unsignedBigInteger('answer_type_id')->nullable();
            $table->foreign('answer_type_id', 'answer_type_fk_3937166')->references('id')->on('answer_types');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3993621')->references('id')->on('users');
        });
    }
}
