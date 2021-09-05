<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: blogs
         */
        Schema::create('blogs', function ($table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('images')->nullable();
            $table->text('tags')->nullable();
            $table->integer('viewcount')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('published', ['yes','no'])->nullable();
            $table->text('published_at')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop('blogs');
    }
}
