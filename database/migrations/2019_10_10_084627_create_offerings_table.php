<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offerings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('faculty_id');
            $table->unsignedBigInteger('subject_id');
        });

        Schema::table('offerings', function($table) {
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->foreign('faculty_id')->references('id')->on('faculties');
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
        Schema::dropIfExists('offerings');
    }
}
