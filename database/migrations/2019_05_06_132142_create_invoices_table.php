<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('invoice_id')->nullable();

            $table->integer('query_id')->unsigned();
            $table->foreign('query_id')->references('id')->on('queries');

            $table->double('discount')->default(0);

            $table->string('currency')->nullable();
            $table->string('total_amount');
            $table->string('payment_type')->nullable();
            $table->string('transaction_id');



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
        Schema::dropIfExists('invoices');
    }
}
