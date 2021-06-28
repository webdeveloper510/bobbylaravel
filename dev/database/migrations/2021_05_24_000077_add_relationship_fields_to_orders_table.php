<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToOrdersTable extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id_bill_id')->nullable();
            $table->foreign('client_id_bill_id', 'client_id_bill_fk_3937025')->references('id')->on('clients');
            $table->unsignedBigInteger('client_id_ship_id')->nullable();
            $table->foreign('client_id_ship_id', 'client_id_ship_fk_3937026')->references('id')->on('clients');
            $table->unsignedBigInteger('sponsor_id')->nullable();
            $table->foreign('sponsor_id', 'sponsor_fk_3937035')->references('id')->on('sponsors');
            $table->unsignedBigInteger('protocol_id')->nullable();
            $table->foreign('protocol_id', 'protocol_fk_3937036')->references('id')->on('protocols');
            $table->unsignedBigInteger('cro_id')->nullable();
            $table->foreign('cro_id', 'cro_fk_3937037')->references('id')->on('cros');
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id', 'gender_fk_3937027')->references('id')->on('genders');
            $table->unsignedBigInteger('images_id')->nullable();
            $table->foreign('images_id', 'images_fk_3937033')->references('id')->on('images');
            $table->unsignedBigInteger('order_status_id')->nullable();
            $table->foreign('order_status_id', 'order_status_fk_3937028')->references('id')->on('order_statuses');
            $table->unsignedBigInteger('owner_id');
            $table->foreign('owner_id', 'owner_fk_3945578')->references('id')->on('users');
        });
    }
}
