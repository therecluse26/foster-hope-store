<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBagItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bag_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('bag_id');
            $table->bigInteger('barcode')->unique();

            $table->foreign('bag_id')->references('id')->on('bags');
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
        Schema::dropIfExists('bag_items');
    }
}
