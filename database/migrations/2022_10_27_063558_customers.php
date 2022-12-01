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
            $table->string('phone_number',10)->unique();
            $table->string('fullname',50)->nullable();
            $table->date('date')->nullable();
            $table->string('address')->nullable();
            $table->integer('gender')->nullable();
            $table->string('favorite')->nullable();
            $table->integer('status')->nullable();
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