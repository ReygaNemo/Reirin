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
        Schema::create('customers', function (Blueprint $table) {
            $table->string('customer_id', 4)->primary();
            $table->string('customer_name');
            $table->string('password');
            $table->string('email');
            $table->string('customer_phone');
            $table->integer('customer_role');
            $table->string('customer_address');
            $table->string('customer_img');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
