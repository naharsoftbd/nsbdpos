<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttributeDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attribute_definitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('definition_name',255);
            $table->string('definition_type',45);
            $table->tinyInteger('definition_flags');
            $table->integer('definition_fk');
            $table->tinyInteger('deleted');
            $table->index('deleted');
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
        Schema::dropIfExists('attribute_definitions');
    }
}
