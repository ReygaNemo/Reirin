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
        Schema::create('employee_service', function (Blueprint $table) {
            $table->string('employee_service_id', 4)->primary();
            $table->string('employee_id', 4);
            $table->string('service_id', 4);
            $table->date('date_available');
            $table->boolean('is_available');
            $table->time('time_available');
            $table->foreign('employee_id')->references('employee_id')->on('employees');
            $table->foreign('service_id')->references('service_id')->on('services');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_service');
    }
};
