<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceivingsItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receivings_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('receiving_id')->unsigned();
            $table->string('description',30);
            $table->string('serialnumber',30);
            $table->integer('line');
            $table->decimal('quantity_purchased',15,3);
            $table->decimal('item_cost_price',15,2);
            $table->decimal('item_unit_price',15,2);
            $table->decimal('discount',15,2);
            $table->tinyInteger('discount_type');
            $table->integer('item_location');
            $table->decimal('receiving_quantity',15,2);
            $table->foreign('receiving_id')->references('id')->on('receivings')->onDelete('cascade');
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
        Schema::dropIfExists('receivings_items');
    }
}
