<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id()->autoIncrement();
<<<<<<< HEAD
            $table->integer('comment_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('title', 255);
            $table->text('content');
            $table->string('image', 255);
            $table->integer('views')->nullable();
=======
            $table->integer('comment_id');
            $table->integer('customer_id');
            $table->string('title');
            $table->string('content');
            $table->integer('status');
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
