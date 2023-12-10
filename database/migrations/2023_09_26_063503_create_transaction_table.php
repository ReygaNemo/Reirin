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
        Schema::create('transaction', function (Blueprint $table) {
            $table->string('transaction_id', 4)->primary();
            $table->string('customer_id', 4);
            $table->string('payment_type_id', 4);
            $table->string('promo_id', 4);
            $table->string('transaction_date');
            $table->string('transaction_status_id', 4);
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('payment_type_id')->references('payment_type_id')->on('payment_type');
            $table->foreign('transaction_status_id')->references('transaction_status_id')->on('transaction_status');
            $table->foreign('promo_id')->references('promo_id')->on('promo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
};
