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
        Schema::create('appointments', function (Blueprint $table) {
            $table->string('appointment_id', 4)->primary();

            $table->string('employee_service_id', 4);
            $table->string('customer_id', 4);
            $table->string('appstatus_id', 4);
            $table->timestamps();
            $table->string('payment_type_id', 4);

            $table->foreign('appstatus_id')->references('appstatus_id')->on('appstatus');
            $table->foreign('employee_service_id')->references('employee_service_id')->on('employee_service');
            $table->foreign('customer_id')->references('customer_id')->on('customers');
            $table->foreign('payment_type_id')->references('payment_type_id')->on('payment_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
