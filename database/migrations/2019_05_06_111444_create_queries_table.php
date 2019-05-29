<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queries', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('category_id')->nullable()->unsigned();
            $table->foreign('category_id')->references('id')->on('catagories');
            $table->integer('vendor_id')->nullable()->unsigned();
            $table->foreign('vendor_id')->references('id')->on('vendors');
            $table->integer('product_id')->nullable()->unsigned();
            $table->foreign('product_id')->references('id')->on('products');
            $table->integer('tag_id')->nullable()->unsigned();
            $table->foreign('tag_id')->references('id')->on('tags');

            $table->string('unit')->nullable();
            $table->string('quantity')->nullable();

            $table->string('message')->nullable();
            $table->string('event_date')->nullable();
            $table->string('shift')->nullable();

            $table->double('total')->default(0);
            $table->double('advance')->default(0);
            $table->double('discount')->default(0);
            $table->double('payment')->default(0);

            $table->date('expiry_date')->nullable();
            $table->string('expiry_time')->nullable();

            $table->string('status')->nullable();
            $table->tinyInteger('is_available')->default(0);

            $table->tinyInteger('is_open')->default(0);

            $table->integer('in_cart')->default(0);
            $table->integer('submit_id')->default(0);
            $table->integer('queue_id')->default(0);

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
        Schema::dropIfExists('queries');
    }
}
