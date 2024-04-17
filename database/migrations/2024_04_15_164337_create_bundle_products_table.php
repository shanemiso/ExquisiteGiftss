<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bundle_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bundleId');
            $table->unsignedBigInteger('productId');
            $table->timestamps();

            $table->foreign('bundleId')->references('id')->on('bundles');
            $table->foreign('productId')->references('id')->on('products');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bundle_products');
    }
};
