<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('shop_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('post_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('review_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('favorite_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('reservation_id')->nullable()->default(NULL)->change();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
