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
        Schema::create(config('litecms.blog.tag.model.table'), function ($table) {
            $table->increments('id');
            $table->string('name', 255)->nullable();
            $table->integer('frequency')->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['Show','Hide'])->nullable();
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
        Schema::drop(config('litecms.blog.tag.model.table'));
    }
}
