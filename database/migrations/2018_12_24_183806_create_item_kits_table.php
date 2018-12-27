<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemKitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_kits', function (Blueprint $table) {
            $table->increments('item_kit_id');
            $table->string('name',255);
            $table->integer('item_id');
            $table->decimal('kit_discount',15,2);
            $table->tinyInteger('kit_discount_type');
            $table->tinyInteger('price_option');
            $table->tinyInteger('print_option');
            $table->string('description',255);
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
        Schema::dropIfExists('item_kits');
    }
}
