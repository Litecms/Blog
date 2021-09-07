<?php

namespace Litecms\Blog\Seeds;

use DB;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blog_categories')->insert([
            [
                'id'               => 1,
                'name'             => 'Arts and Entertainment',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 2,
                'name'             => 'Branding',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 3,
                'name'             => 'Design Tutorials',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 4,
                'name'             => 'Designing',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 5,
                'name'             => 'Feature',
                'slug'             => NULL,
                'status'           => 'show',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'blog.category.view',
                'name'      => 'View Category',
            ],
            [
                'slug'      => 'blog.category.create',
                'name'      => 'Create Category',
            ],
            [
                'slug'      => 'blog.category.edit',
                'name'      => 'Update Category',
            ],
            [
                'slug'      => 'blog.category.delete',
                'name'      => 'Delete Category',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            // [
            //     'parent_id'   => 1,
            //     'key'         => null,
            //     'url'         => 'admin/blog/category',
            //     'name'        => 'Category',
            //     'description' => null,
            //     'icon'        => 'fa fa-newspaper-o',
            //     'target'      => null,
            //     'order'       => 190,
            //     'status'      => 1,
            // ],

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
