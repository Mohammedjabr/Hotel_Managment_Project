<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
<<<<<<< HEAD
            $table->bigIncrements('id');
            $table->integer('room_number');
            $table->enum('type', ['single', 'double', 'king', 'twin']);
            $table->integer('price');
            $table->enum('book_type', ['daily', 'monthly']);
            $table->boolean('is_booked');//0 not booked 1 booked
            $table->text('note');
            $table->text('image');
<<<<<<< HEAD
            $table->softDeletes();
=======
=======
            $table->integer('room_number')->primary();
            $table->enum('type', ['single', 'double', 'king', 'twin', 'cabana', 'superior', 'junior_suite']);//open website to show what there like booking.com
            $table->integer('price');
            $table->enum('book_type', ['daily', 'monthly']);
            $table->string('services');
            $table->string('image')->nullable();;
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
>>>>>>> develop
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('room');
    }
}
