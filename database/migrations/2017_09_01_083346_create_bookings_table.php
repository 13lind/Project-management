<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->string('car_used');
            $table->string('rego_number');
            $table->string('car_location');
            $table->string('date_from');
            $table->string('time_from');
            $table->string('date_to');
            $table->string('time_to');
            $table->string('total_cost');
            $table->string('cost_per_hour');
            $table->string('cost_per_day');
            $table->boolean('completed');
            
            
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
        Schema::dropIfExists('car_bookings');
    }
}
