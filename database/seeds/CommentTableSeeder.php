<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.blog.comment.table'))->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'blog.comment.view',
                'name'      => 'View Comment',
            ],
            [
                'slug'      => 'blog.comment.create',
                'name'      => 'Create Comment',
            ],
            [
                'slug'      => 'blog.comment.edit',
                'name'      => 'Update Comment',
            ],
            [
                'slug'      => 'blog.comment.delete',
                'name'      => 'Delete Comment',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/blog/comment',
                'name'        => 'Comment',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/blog/comment',
                'name'        => 'Comment',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'comment',
                'name'        => 'Comment',
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
                'module'    => 'Comment',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'blog.comment.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
