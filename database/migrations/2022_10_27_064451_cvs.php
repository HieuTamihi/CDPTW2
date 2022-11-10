<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cvs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('namecv');
            $table->string('fullname');
            $table->string('avatar');
            $table->string('apply_position');
            $table->string('email');
            $table->integer('phone_number');
            $table->date('date');
            $table->string('introduce')->nullable();
            $table->string('exp_work')->nullable();
            $table->string('school_name');
            $table->string('learn_time');
            $table->string('majors');
            $table->string('infor_other')->nullable();
            $table->integer('status');
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
