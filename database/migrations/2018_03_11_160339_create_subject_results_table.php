<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectResultsTable extends Migration
{
    /**
     * Run the migrations.
     * to store subject results in json
     * <p>
     * results column to contain sub_code, student_id and result obtained
     * @return void
     */
    public function up()
    {
        Schema::create('subject_results', function (Blueprint $table) {
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
        Schema::dropIfExists('subject_results');
    }
}
