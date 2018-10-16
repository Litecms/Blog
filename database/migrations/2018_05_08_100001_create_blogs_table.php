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
        Schema::create(config('litecms.blog.blog.model.table'), function ($table) {
            $table->increments('id');
            $table->integer('category_id')->nullable();
            $table->string('title', 255)->nullable();
            $table->string('caption', 255)->nullable();
            $table->longText('description')->nullable();
            $table->text('images')->nullable();
            $table->text('tags')->nullable();
            $table->integer('viewcount')->default(0);
            $table->string('slug', 255)->nullable();
            $table->string('meta_title', 255)->nullable();
            $table->string('meta_description', 255)->nullable();
            $table->string('meta_keyword', 255)->nullable();
            $table->enum('published', ['yes', 'no'])->nullable();
            $table->timestamp('published_at')->nullable();
            $table->string('user_type', 255)->nullable();
            $table->integer('user_id')->nullable();
            $table->string('upload_folder', 255)->nullable();
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
        Schema::drop(config('litecms.blog.blog.model.table'));
    }
}
