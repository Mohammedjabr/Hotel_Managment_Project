<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('phone_number')->unique();
            $table->string('email')->unique();
            $table->integer('adults');
            $table->integer('children');
            $table->date('date_check_in');
            $table->date('date_check_out');
            $table->integer('room_id');
            $table->softDeletes();	
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}