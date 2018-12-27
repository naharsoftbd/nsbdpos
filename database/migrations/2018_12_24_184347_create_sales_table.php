<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id')->unsigned();
            $table->integer('employee_id')->unsigned();
            $table->text('comment');
            $table->string('invoice_number',32);
            $table->string('quote_number',32);
            $table->tinyInteger('sale_status');
            $table->integer('dinner_table_id')->unsigned();
            $table->string('work_order_number',32);
            $table->tinyInteger('sale_type');            
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
        Schema::dropIfExists('sales');
    }
}
