<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('Username')->nullable();
            $table->string('UserPhone')->nullable();
            $table->string('Device')->nullable();
            $table->string('Color')->nullable();
            $table->string('Damage')->nullable();
            $table->dateTime('AppointmentTime')->nullable();
            $table->string('Location')->nullable()->default('Latitude: 32.0342874
            Longitude: 35.883024');
            $table->string('Price')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
