<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

<<<<<<<< HEAD:vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
class {{ class }} extends Migration
========
class Recruitments extends Migration
>>>>>>>> CRUD_employer:database/migrations/2022_10_27_065311_recruitments.php
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
<<<<<<<< HEAD:vendor/laravel/framework/src/Illuminate/Database/Migrations/stubs/migration.create.stub
        Schema::create('{{ table }}', function (Blueprint $table) {
            $table->id();
========
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
>>>>>>>> CRUD_employer:database/migrations/2022_10_27_065311_recruitments.php
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
        Schema::dropIfExists('{{ table }}');
    }
}
