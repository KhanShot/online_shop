<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('sub_subcategory')->nullable();
            $table->string('product_type')->nullable();
            $table->string('madefrom')->nullable();
            $table->string('product_brand')->nullable();
            $table->string('product_color')->nullable();
            $table->string('status')->nullable();
            $table->string('product_format')->nullable();
            $table->string('product_info')->nullable();
            $table->string('images')->nullable();
            $table->string('partners_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
