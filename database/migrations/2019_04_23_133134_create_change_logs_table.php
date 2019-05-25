<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChangeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id');
            $table->string('vendor_service')->nullable();
            $table->string('package_gallery')->nullable();
            $table->string('table_name')->nullable();
            $table->integer('table_id')->nullable();
            $table->string('message')->nullable();
            $table->string('action')->nullable();
            $table->string('order_action')->nullable();
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
        Schema::dropIfExists('change_logs');
    }
}
