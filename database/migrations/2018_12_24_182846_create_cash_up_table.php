<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashUpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_up', function (Blueprint $table) {
            $table->increments('cashup_id');
            $table->dateTime('open_date');
            $table->dateTime('close_date');
            $table->decimal('open_amount_cash',15,2);
            $table->decimal('transfer_amount_cash',15,2);
            $table->integer('note');
            $table->decimal('closed_amount_cash',15,2);
            $table->decimal('closed_amount_card',15,2);
            $table->decimal('closed_amount_check',15,2);
            $table->decimal('closed_amount_total',15,2);
            $table->string('description',255);
            $table->integer('open_employee_id');
            $table->integer('close_employee_id');
            $table->integer('deleted');
            $table->decimal('closed_amount_due',15,2);
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
        Schema::dropIfExists('cash_up');
    }
}
