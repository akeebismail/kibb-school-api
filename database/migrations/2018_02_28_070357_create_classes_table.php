<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_type', function (Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('details')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('code');
            $table->unsignedInteger('teacher_id')->default(0);
            $table->unsignedInteger('class_type_id')->default(0);
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
        Schema::dropIfExists('class_type');
        Schema::dropIfExists('classes');
    }
}
