<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentTagImagePivotTable extends Migration
{
    public function up()
    {
        Schema::create('content_tag_image', function (Blueprint $table) {
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id', 'image_id_fk_3936990')->references('id')->on('images')->onDelete('cascade');
            $table->unsignedBigInteger('content_tag_id');
            $table->foreign('content_tag_id', 'content_tag_id_fk_3936990')->references('id')->on('content_tags')->onDelete('cascade');
        });
    }
}
