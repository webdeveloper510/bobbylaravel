<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderPackagePivotTable extends Migration
{
    public function up()
    {
        Schema::create('order_package', function (Blueprint $table) {
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id', 'order_id_fk_3937024')->references('id')->on('orders')->onDelete('cascade');
            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id', 'package_id_fk_3937024')->references('id')->on('packages')->onDelete('cascade');
        });
    }
}
