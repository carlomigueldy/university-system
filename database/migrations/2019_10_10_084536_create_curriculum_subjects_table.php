<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurriculumSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curriculum_subjects', function (Blueprint $table) {
            $table->unsignedBigInteger('curriculum_id');
            $table->unsignedBigInteger('subject_id')->unique();
        });

        Schema::table('curriculum_subjects', function($table) {
            $table->foreign('curriculum_id')->references('id')->on('curricula');
            $table->foreign('subject_id')->references('id')->on('subjects');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curriculum_subjects');
    }
}
