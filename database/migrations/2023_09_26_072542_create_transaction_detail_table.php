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
        Schema::create('transaction_detail', function (Blueprint $table) {
            $table->string('transaction_id', 4);
            $table->string('product_id', 4);
            $table->integer('product_amount');

            
            $table->primary(['transaction_id','product_id']);
            $table->unique(['transaction_id','product_id']);
            $table->foreign('transaction_id')->references('transaction_id')->on('transaction');

            $table->foreign('product_id')->references('product_id')->on('product');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction_detail');
    }
};
