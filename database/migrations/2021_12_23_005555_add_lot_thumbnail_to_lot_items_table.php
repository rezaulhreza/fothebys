<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLotThumbnailToLotItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lot_items', function (Blueprint $table) {
            //
            $table->string('lot_thumbnail')->nullable()->default('thumbnail.jpg');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lot_items', function (Blueprint $table) {
            //
            $table->dropColumn('lot_thumbnail');
        });
    }
}
