<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeColumnCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commodities', function (Blueprint $table) {
            $table->unsignedBigInteger('shop_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('user_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('image_id')->nullable()->default(NULL)->change();
            $table->unsignedBigInteger('favorite_id')->nullable()->default(NULL)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commodities', function (Blueprint $table) {
            //
        });
    }
}
