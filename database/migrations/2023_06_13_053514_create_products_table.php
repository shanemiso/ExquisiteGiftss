<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('categoryId');
            $table->string('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('discountPrice')->nullable();
            $table->unsignedBigInteger('vendorId');
            $table->timestamps();

            $table->foreign('vendorId')->references('id')->on('admins');
            $table->foreign('categoryId')->references('id')->on('categories');
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
};
