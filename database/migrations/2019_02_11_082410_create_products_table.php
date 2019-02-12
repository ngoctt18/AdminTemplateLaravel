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
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->unsignedInteger('price')->default(0);
            $table->unsignedInteger('discount')->default(0);
            $table->string('images')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('hot')->nullable();
            $table->string('warranty')->nullable();
            $table->string('brand')->nullable();
            $table->text('description')->nullable();
            $table->text('intro')->nullable();
            $table->unsignedInteger('catagory_id');
            $table->foreign('catagory_id')->references('id')->on('catagories')->onDelete('cascade');
            $table->unsignedInteger('distribution_id');
            $table->foreign('distribution_id')->references('id')->on('distributions')->onDelete('cascade');
            $table->enum('status',[0, 1])->default(1);
            // 0: hết hàng, 1: còn hàng
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
