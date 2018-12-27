<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_taxes', function (Blueprint $table) {
            $table->integer('sale_id')->unsigned();
            $table->smallInteger('tax_type')->index()->primary();
            $table->string('tax_group',32)->index();
            $table->decimal('sale_tax_basis',15,2);
            $table->decimal('sale_tax_amount',15,2);
            $table->tinyInteger('print_sequence')->index();
            $table->string('name');
            $table->decimal('tax_rate',15,2);
            $table->string('sales_tax_code',32);
            $table->tinyInteger('rounding_code');
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('cascade');
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
        Schema::dropIfExists('sales_taxes');
    }
}
