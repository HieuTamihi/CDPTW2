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
            $table->text('required');
            $table->string('salary');
            $table->string('token')->nullable();
            $table->timestamps();
            $table->date('deleted_at')->nullable();
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