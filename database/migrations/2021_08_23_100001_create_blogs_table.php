<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

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
            $table->text('summary')->nullable();
            $table->text('description')->nullable();
            $table->text('images')->nullable();
            $table->string('tags', 225)->nullable();
            $table->integer('viewcount')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['draft', 'completed', 'approved', 'published'])->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });

        /*
         * Table: tags
         */
        Schema::create('blog_tags', function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['show', 'hide'])->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });

        /*
         * Table: categories
         */
        Schema::create('blog_categories', function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['show', 'hide'])->nullable();
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
        Schema::drop('blog_tags');
        Schema::drop('blog_categories');
    }
}
