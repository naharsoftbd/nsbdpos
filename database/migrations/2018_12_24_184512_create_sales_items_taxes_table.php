<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesItemsTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_items_taxes', function (Blueprint $table) {
            $table->integer('sale_id')->unsigned();
            $table->integer('item_id')->unsigned();
            $table->integer('line');
            $table->string('name');
            $table->decimal('percent',15,4);
            $table->tinyInteger('tax_type');
            $table->tinyInteger('rounding_code');
            $table->tinyInteger('cascade_tax');
            $table->tinyInteger('cascade_sequence');
            $table->decimal('item_tax_amount',15,4);
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
            $table->foreign('item_id')->references('id')->on('items')->onDelete('cascade');
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
        Schema::dropIfExists('sales_items_taxes');
    }
}
