<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('news_type_id');
            $table->unsignedBigInteger('news_subtype_id');
            $table->unsignedBigInteger('media_id')->nullable();
            $table->string('title');
            $table->text('content');
            $table->boolean('breaking_news')->default(false);
            $table->boolean('latest_news')->default(false);
            $table->dateTime('publish_at')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('news_type_id')->references('id')->on('news_types')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('news_subtype_id')->references('id')->on('news_subtypes')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('media_id')->references('id')->on('media')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
