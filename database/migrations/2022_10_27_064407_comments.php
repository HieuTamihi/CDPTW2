<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
<<<<<<< HEAD
            $table->integer('post_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('title')->nullable();
            $table->string('comment');
=======
=======
>>>>>>> origin/register_employer
            $table->integer('post_id');
            $table->integer('customer_id');
            $table->string('title');
            $table->string('content_comment');
<<<<<<< HEAD
>>>>>>> blog_home
=======
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
