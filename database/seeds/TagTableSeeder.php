<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.blog.tag.table'))->insert([
            ['id' => '1', 'name' => 'Lenovo', 'frequency' => '1', 'slug' => 'lenovo', 'published' => 'yes', 'created_at' => '2018-05-29 10:10:19', 'updated_at' => '2018-05-29 10:10:19', 'deleted_at' => null],
            ['id' => '2', 'name' => 'Samsung', 'frequency' => '1', 'slug' => 'samsung', 'published' => 'yes', 'created_at' => '2018-05-29 10:10:29', 'updated_at' => '2018-05-29 10:10:29', 'deleted_at' => null],
            ['id' => '3', 'name' => 'Story', 'frequency' => '1', 'slug' => 'story', 'published' => 'yes', 'created_at' => '2018-05-29 10:10:40', 'updated_at' => '2018-05-29 10:10:40', 'deleted_at' => null],
            ['id' => '4', 'name' => 'Hotel', 'frequency' => '1', 'slug' => 'hotel', 'published' => 'yes', 'created_at' => '2018-05-29 10:10:49', 'updated_at' => '2018-05-29 10:10:49', 'deleted_at' => null],

        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'blog.tag.view',
                'name' => 'View Tag',
            ],
            [
                'slug' => 'blog.tag.create',
                'name' => 'Create Tag',
            ],
            [
                'slug' => 'blog.tag.edit',
                'name' => 'Update Tag',
            ],
            [
                'slug' => 'blog.tag.delete',
                'name' => 'Delete Tag',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/blog/tag',
                'name'        => 'Tag',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/blog/tag',
                'name'        => 'Tag',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'tag',
                'name'        => 'Tag',
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
        'module'    => 'Tag',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'blog.tag.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
