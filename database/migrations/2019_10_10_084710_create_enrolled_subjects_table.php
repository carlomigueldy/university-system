<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnrolledSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enrolled_subjects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('certificate_of_registration_id');
            $table->unsignedBigInteger('completion_record_id');
            $table->unsignedBigInteger('grade_id');
            $table->unsignedBigInteger('offering_id');
        });

        Schema::table('enrolled_subjects', function($table) {
            $table->foreign('certificate_of_registration_id')->references('id')->on('certificate_of_registrations');
            $table->foreign('completion_record_id')->references('id')->on('completion_records');
            $table->foreign('grade_id')->references('id')->on('grades');
            $table->foreign('offering_id')->references('id')->on('offerings');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enrolled_subjects');
    }
}
