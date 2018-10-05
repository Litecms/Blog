<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.blog.category.table'))->insert([
           ['id' => '1', 'name' => 'Smartphones', 'slug' => 'smartphones', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-05-29 10:09:16', 'updated_at' => '2018-05-29 10:09:16', 'deleted_at' => null],
            ['id' => '2', 'name' => 'General', 'slug' => 'general', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-09-12 07:31:29', 'updated_at' => '0000-00-00 00:00:00', 'deleted_at' => null],
            ['id' => '4', 'name' => 'Business', 'slug' => 'business', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-09-12 11:34:34', 'updated_at' => '2018-09-12 11:34:34', 'deleted_at' => null],
            ['id' => '5', 'name' => 'Electronic Gadgets', 'slug' => 'electronic-gadgets', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-09-12 11:36:52', 'updated_at' => '2018-09-12 11:36:52', 'deleted_at' => null],


        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'blog.category.view',
                'name' => 'View Category',
            ],
            [
                'slug' => 'blog.category.create',
                'name' => 'Create Category',
            ],
            [
                'slug' => 'blog.category.edit',
                'name' => 'Update Category',
            ],
            [
                'slug' => 'blog.category.delete',
                'name' => 'Delete Category',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/blog/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/blog/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'pacakge'   => 'Blog',
        'module'    => 'Category',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'blog.category.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
