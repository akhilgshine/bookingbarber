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
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('name');
            $table->string('email');
            $table->integer('number');
            $table->timestamp('booked_time');
            $table->unsignedBigInteger('type_id')->unsigned()->index();
            $table->unsignedBigInteger('barber_id')->unsigned()->index();

            $table->foreign('barber_id')->references('id')->on('barbers')->onDelete('cascade');

            $table->foreign('type_id')->references('id')->on('booking_types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
