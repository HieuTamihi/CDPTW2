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
<<<<<<< HEAD
            $table->integer('user_id');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('website');
            $table->string('infor',5000);
            $table->string('responsibility',5000);
            $table->string('welfare',500);
=======
=======
>>>>>>> CRUD_Job_By_Emloy_id
=======
>>>>>>> RUEmployer_By_ID
=======
>>>>>>> origin/change_password_employer
            $table->string('website')->nullable();
            $table->string('infor',5000)->nullable();
            $table->string('responsibility',5000)->nullable();
            $table->string('welfare',500)->nullable();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
>>>>>>> CRUD_Employer_By_ID
=======
>>>>>>> CRUD_Job_By_Emloy_id
=======
>>>>>>> RUEmployer_By_ID
=======
>>>>>>> blog_home
=======
>>>>>>> origin/change_password_employer
            $table->string('name_company');
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('email');
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('phone_number',11);
=======
            $table->integer('phone_number');
>>>>>>> blog_home
=======
            $table->string('phone_number',11);
>>>>>>> origin/change_password_employer
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
