<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothingItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothing_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('barcode', 13);
            $table->string('type', 50);
            $table->string('size', 10);
            $table->char('gender', 1);
            $table->string('target_age');
            $table->string('condition', 255)->nullable();
            $table->string('color', 15)->nullable();
            $table->
            $table->boolean('available')->default(true);
            $table->timestamps();

            $table->foreign('barcode')->references('barcode')->on('barcodes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clothing_items');
    }
}
