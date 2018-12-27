<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxCodeRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_code_rates', function (Blueprint $table) {
            $table->string('rate_tax_code',32)->primary();
            $table->integer('rate_tax_category_id');
            $table->decimal('tax_rate',15,4);
            $table->tinyInteger('rounding_code');
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
        Schema::dropIfExists('tax_code_rates');
    }
}
