<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSslorderTable extends Migration
{



    public function up()
    {
        Schema::create('sslorder', function (Blueprint $table) {
            $table->increments('id');

            $table->string('order_id')->nullable();
            $table->string('tran_id',25)->nullable();
            $table->string('val_id')->nullable();

            $table->string('currency')->nullable();
            $table->integer('total_amount');
            $table->string('store_amount')->nullable();

            $table->string('tran_date')->nullable();


            $table->string('cus_name')->nullable();
            $table->string('cus_email')->nullable();
            $table->string('cus_phone')->nullable();
            $table->string('order_status')->nullable();

            $table->string('bank_tran_id')->nullable();
            $table->string('card_issuer')->nullable();
            $table->string('card_brand')->nullable();

            $table->string('store_id')->nullable();
            $table->string('verify_sign')->nullable();
            $table->string('verify_sign_sha2')->nullable();
            $table->string('currency_rate')->nullable();

            $table->timestamps();

        });
    }


    public function down()
    {
        Schema::dropIfExists('sslorder');
    }
}
