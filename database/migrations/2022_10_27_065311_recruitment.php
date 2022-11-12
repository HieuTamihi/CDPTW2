<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recruitment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<< HEAD
        Schema::create('recruitments', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->integer('jobposting_id');
            $table->foreign('jobposting_id')->references('id')->on('job_postings')->onDelete('cascade');
            $table->integer('cv_id')->nullable();
            $table->string('status')->nullable();
            $table->text('introduce')->nullable();
            $table->string('file')->nullable();
=======
        Schema::create('recruitment', function (Blueprint $table) {
            $table->integer('customer_id');
            $table->integer('jobposting_id');
            $table->string('status')->nullable();
>>>>>>> origin/register_employer
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
