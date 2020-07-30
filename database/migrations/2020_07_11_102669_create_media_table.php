<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('news_type_id')->nullable();
            $table->unsignedBigInteger('news_subtype_id')->nullable();
            $table->string('title');
            $table->string('media_type')->comment('image, video');
            $table->string('file');
            $table->timestamps();
            $table->foreign('news_type_id')->references('id')->on('news_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('news_subtype_id')->references('id')->on('news_subtypes')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}
