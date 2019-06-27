<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
<<<<<<< HEAD
=======
            $table->string('password');
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
            $table->integer('phone_number');
            $table->date('DoB');
            $table->string('address');
            $table->integer('salary');
            $table->string('work_days');
            $table->softDeletes();	
            $table->timestamps();
<<<<<<< HEAD
=======
            $table->rememberToken();
>>>>>>> 47d84e8abedba70af7d5d2c1438edc573aff5cf3
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
