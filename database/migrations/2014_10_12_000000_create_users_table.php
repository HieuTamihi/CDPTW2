<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id()->autoIncrement();
<<<<<<< HEAD
=======
            $table->integer("employer_id")->nullable();
>>>>>>> origin/register_employer
            $table->integer("customer_id")->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('phone');
            $table->string('password');
            $table->integer("role");
            $table->integer("status");
<<<<<<< HEAD
            $table->string('confirm')->nullable();
=======
>>>>>>> origin/register_employer
            $table->rememberToken()->nullable();
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
        Schema::dropIfExists('users');
    }
}
