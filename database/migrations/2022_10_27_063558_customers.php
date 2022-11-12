<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('email');
            $table->string('phone_number')->unique();
            $table->string('fullname')->nullable();
            $table->date('date')->nullable();
            $table->string('address')->nullable();
            $table->integer('gender')->nullable();
            $table->string('favorite')->nullable();
            $table->integer('status')->nullable();
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