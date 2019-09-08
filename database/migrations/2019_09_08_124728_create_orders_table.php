<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            $table->integer('user_id');
            $table->integer('partners_id')->nullable();
            $table->integer('viewed_partner')->nullable();
            $table->integer('viewed_superuser')->nullable();
            $table->timestamps();
        });
    }

     
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
