<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shops', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('commodity_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('post_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('review_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('image_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('reservation_id')->nullable()->default(NULL)->change();
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
            //
        });
    }
}
