<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class JobPostings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_postings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('employer_id');
            $table->string('title');
            $table->string('experience')->nullable();
            $table->string('type');
            $table->string('skill');
            $table->string('required');
            $table->string('salary');
<<<<<<< HEAD
            $table->string('token');
=======
            $table->string('token')->nullable();
>>>>>>> CRUD_Job_By_Emloy_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
