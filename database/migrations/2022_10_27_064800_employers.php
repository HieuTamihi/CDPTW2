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
<<<<<<< HEAD
            $table->integer('user_id');
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/confirm_email
=======
            $table->integer('user_id');
>>>>>>> origin/detail_page
=======
>>>>>>> origin/register_and_send_mail
            $table->string('website')->nullable();
            $table->string('infor',5000)->nullable();
            $table->string('responsibility',5000)->nullable();
            $table->string('welfare',500)->nullable();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
>>>>>>> origin/confirm_email
=======
>>>>>>> origin/detail_page
=======
>>>>>>> origin/register_and_send_mail
            $table->string('name_company');
            $table->string('address')->nullable();
            $table->string('image')->nullable();
            $table->string('email');
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
            $table->string('phone_number',11);
=======
            $table->integer('phone_number');
>>>>>>> blog_home
=======
            $table->string('phone_number',11);
>>>>>>> origin/change_password_employer
=======
            $table->string('phone_number',11);
>>>>>>> origin/detail_page
=======
            $table->string('phone_number',11);
>>>>>>> origin/register_and_send_mail
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
