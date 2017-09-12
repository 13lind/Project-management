<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('make');
            $table->string('model');
            $table->string('rego_number');
            $table->string('car_location');
            $table->string('cost_per_hour');
            $table->string('cost_per_day');
            $table->boolean('avaliable');
            
            
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
        Schema::dropIfExists('car_info');
    
    }
}
