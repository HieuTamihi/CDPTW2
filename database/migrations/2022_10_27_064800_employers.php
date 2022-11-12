<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('user_id');
            $table->string('website')->nullable();
            $table->string('infor',5000)->nullable();
            $table->string('responsibility',5000)->nullable();
            $table->string('welfare',500)->nullable();
            $table->string('name_company');
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('email');
            $table->integer('phone_number');
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