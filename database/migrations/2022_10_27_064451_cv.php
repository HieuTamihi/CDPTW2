<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cv extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('fullname');
            $table->string('avatar');
<<<<<<< HEAD
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
=======
            $table->string('enjoy_tech');
            $table->string('aplly_posion');
            $table->string('email');
            $table->integer('phone_number');
            $table->integer('gender');
            $table->string('exp_work')->nullable();
            $table->string('skill')->nullable();
            $table->string('infor_order')->nullable();
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
