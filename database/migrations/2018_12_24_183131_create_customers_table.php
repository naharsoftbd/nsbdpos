<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->integer('person_id');
            $table->string('company_name',255);
            $table->string('account_number',255);
            $table->integer('taxable');
            $table->string('sales_tax_code',255);
            $table->decimal('discount',15,2);
            $table->tinyInteger('discount_type');
            $table->integer('package_id');
            $table->integer('points');
            $table->integer('deleted');
            $table->integer('employee_id');
            $table->integer('consent');
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
        Schema::dropIfExists('customers');
    }
}
