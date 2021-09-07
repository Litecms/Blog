<?php

namespace Litecms\Blog\Seeds;

use DB;
use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blog_tags')->insert([
            [
                'id'               => 1,
                'name'             => 'Advertisements',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 2,
                'name'             => 'Artistry',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 3,
                'name'             => 'Blog',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 4,
                'name'             => 'Conceptual',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 5,
                'name'             => 'Design',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 6,
                'name'             => 'Fashion',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 7,
                'name'             => 'Inscription',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 8,
                'name'             => 'Smart',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 9,
                'name'             => 'Quotes',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 10,
                'name'             => 'Unique',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 11,
                'name'             => 'Concepts',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'blog.tag.view',
                'name'      => 'View Tag',
            ],
            [
                'slug'      => 'blog.tag.create',
                'name'      => 'Create Tag',
            ],
            [
                'slug'      => 'blog.tag.edit',
                'name'      => 'Update Tag',
            ],
            [
                'slug'      => 'blog.tag.delete',
                'name'      => 'Delete Tag',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            // [
            //     'parent_id'   => 1,
            //     'key'         => null,
            //     'url'         => 'admin/blog/tag',
            //     'name'        => 'Tag',
            //     'description' => null,
            //     'icon'        => 'fa fa-newspaper-o',
            //     'target'      => null,
            //     'order'       => 190,
            //     'status'      => 1,
            // ],

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
