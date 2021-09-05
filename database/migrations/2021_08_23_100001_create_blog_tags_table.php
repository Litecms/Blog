<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogTagsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: tags
         */
        Schema::create('blog_tags', function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['show','hide'])->nullable();
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
        Schema::drop('blog_tags');
    }
}