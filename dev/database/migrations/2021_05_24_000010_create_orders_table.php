<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order')->nullable();
            $table->integer('referral_guarantee')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->integer('minimum_age')->nullable();
            $table->integer('maximum_age')->nullable();
            $table->string('minimum_bmi')->nullable();
            $table->string('maximum_bmi')->nullable();
            $table->string('coupon_code')->nullable();
            $table->float('discount_rate', 4, 2)->nullable();
            $table->integer('sub_total_price')->nullable();
            $table->integer('total_price')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('credit_card')->nullable();
            $table->string('stripe_confirmation')->nullable();
            $table->longText('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
