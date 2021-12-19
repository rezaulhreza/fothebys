<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLotitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot_items', function (Blueprint $table) {
            $table->id();
     
            $table->unsignedBigInteger('category_id')->nullable();
         
       
            $table->string('title');
         
            $table->string('lot_ref')->nullable();
            $table->string('artist');         
            $table->string('year');
        
            $table->unsignedInteger('minimum')->nullable();
            $table->unsignedInteger('estimated')->nullable();
            $table->text('additional')->nullable();
          
            $table->longText('desc')->nullable();
            $table->boolean('status')->default(true);

          
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade')
                ->onUpdate('cascade');
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lotitems');
    }
}
