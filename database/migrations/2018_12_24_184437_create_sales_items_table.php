<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_items', function (Blueprint $table) {
            $table->integer('sale_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->string('description',255);
            $table->string('serialnumber',30);
            $table->integer('line')->index();
            $table->decimal('quantity_purchased',15,2);
            $table->decimal('item_cost_price',15,2);
            $table->decimal('item_unit_price',15,2);
            $table->decimal('discount',15,2);
            $table->tinyInteger('discount_type');
            $table->integer('item_location')->unsigned();
            $table->tinyInteger('print_option');
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
        Schema::dropIfExists('sales_items');
    }
}
