<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassResultsTable extends Migration
{
    /**
     * Run the migrations.
     *  class results
     * <p>
     * results to contain student_id, subject code, result obtained
     *</p>
     * @return void
     */
    public function up()
    {
        Schema::create('class_results', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('session_id');
            $table->unsignedInteger('term_id');
            $table->unsignedInteger('class_id');
            $table->json('results');
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
        Schema::dropIfExists('class_results');
    }
}
