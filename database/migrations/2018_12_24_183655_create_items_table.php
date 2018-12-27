<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->string('category',255);
            $table->integer('supplier_id');
            $table->string('item_number',255);
            $table->string('description',255);
            $table->decimal('cost_price',15,2);
            $table->decimal('unit_price',15,2);
            $table->decimal('reorder_level',15,2);
            $table->decimal('receiving_quantity',15,2);
            $table->string('pic_filename',255);
            $table->tinyInteger('allow_alt_description');
            $table->tinyInteger('is_serialized');
            $table->tinyInteger('stock_type');
            $table->tinyInteger('item_type');
            $table->integer('tax_category_id');
            $table->decimal('qty_per_pack',15,2);
            $table->string('pack_name',8);
            $table->integer('low_sell_item_id');
            $table->integer('deleted');
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
        Schema::dropIfExists('items');
    }
}
