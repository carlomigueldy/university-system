<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateOfRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_of_registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('scholarship_id');
            $table->unsignedBigInteger('curriculum_id');
        });

        Schema::table('certificate_of_registrations', function($table) {
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('scholarship_id')->references('id')->on('scholarships');
            $table->foreign('curriculum_id')->references('id')->on('curricula');
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificate_of_registrations');
    }
}
