<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('store_in');
            $table->string('take_out');
            $table->string('delivery');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('commodity_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('review_id');
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('commodity_id')->references('id')->on('commodities')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->string('store_in');
            $table->string('take_out');
            $table->string('delivery');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('commodity_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('review_id');
            $table->unsignedBigInteger('image_id');
            $table->unsignedBigInteger('reservation_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('commodity_id')->references('id')->on('commodities')->onDelete('cascade');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
            $table->foreign('review_id')->references('id')->on('reviews')->onDelete('cascade');
            $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
            $table->foreign('reservation_id')->references('id')->on('reservations')->onDelete('cascade');
        });
    }
}
