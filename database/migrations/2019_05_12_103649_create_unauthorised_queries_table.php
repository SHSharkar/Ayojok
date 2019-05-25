<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnauthorisedQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unauthorised_queries', function (Blueprint $table) {
            $table->increments('id');

            $table->string('mobile_number');

            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('catagories');
            $table->integer('vendor_id')->nullable()->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->integer('product_id')->nullable()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');

            $table->string('unit')->nullable();
            $table->string('quantity')->nullable();

            $table->string('message')->nullable();
            $table->date('event_date')->nullable();
            $table->string('shift')->nullable();


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
        Schema::dropIfExists('unauthorised_queries');
    }
}
