<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->increments('id');
            $table->datetime('date');
            $table->decimal('amount',15,2);
            $table->string('payment_type',40);
            $table->integer('expense_category_id');
            $table->string('description',255);
            $table->integer('employee_id');
            $table->integer('deleted');
            $table->string('supplier_tax_code',255);
            $table->decimal('tax_amount',15,2);
            $table->integer('supplier_id');
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
        Schema::dropIfExists('expenses');
    }
}
