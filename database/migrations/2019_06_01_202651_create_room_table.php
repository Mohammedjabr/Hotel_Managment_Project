<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('room_number');
            $table->enum('type', ['single', 'double', 'king', 'twin']);
            $table->integer('price');
            $table->enum('book_type', ['daily', 'monthly']);
            $table->boolean('is_booked');//0 not booked 1 booked
            $table->text('note');
            $table->text('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('room');
    }
}
