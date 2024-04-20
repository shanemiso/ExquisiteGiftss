<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    protected $fillable = ['userId', 'id', 'paymentType', 'accountNumber'];

    public function up()
    {
        Schema::create('user_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('userId');
            $table->string('accountNumber')->nullable();
            $table->enum('paymentType', ['cash', 'card', 'wallet'])->default('cash');

            $table->timestamps();

            $table->foreign('userId')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_payments');
    }
};
