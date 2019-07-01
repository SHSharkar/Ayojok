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
            $table->string('user_id')->nullable();
            $table->string('submit_id')->nullable();

            $table->integer('sslorder_id')->nullable();

            $table->integer('query_id')->unsigned();
            $table->foreign('query_id')->references('id')->on('queries');



            $table->string('paid_amount');
            $table->string('payment_type')->nullable();

            $table->string('transaction_id')->nullable();

            $table->integer('valid')->nullable();

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
