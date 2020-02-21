<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComfortItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comfort_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('barcode', 13);
            $table->string('type', 50);
            $table->char('gender', 1)->nullable();
            $table->string('target_age');
            $table->string('description', 255)->nullable();
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
        Schema::dropIfExists('comfort_items');
    }
}
