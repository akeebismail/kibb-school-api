<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_id')->default(0);
            $table->string('name');
            $table->string('slug');
            $table->string('code');
            $table->integer('teacher_id')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('class_room_students',function (Blueprint $table){
            $table->increments('id');
            $table->integer('class_room_id');
            $table->integer('student_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('class_rooms');
        Schema::dropIfExists('class_room_students');
    }
}
