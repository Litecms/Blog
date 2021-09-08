<?php

namespace Litecms\Blog\Seeds;

use DB;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'id'               => 1,
                'category_id'      => 1,
                'title'            => 'Design is thinking made visual',
                'description'      => '<p style="color: rgb(111, 111, 111); line-height: 24px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h3 style="font-family: Roboto, sans-serif; color: rgb(0, 0, 0);">Microsoft Patch Management For Home Users</h3><p style="color: rgb(111, 111, 111); line-height: 24px;">Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then, she likes it and this supports us too, so I went along without any hassle. At first I was depressed, but then as I asked around and looked around, I ended up having more fun in Las Vegas than I would have thought. And no. I did not enter a single casino while I was there.</p><h5 style="font-family: Roboto, sans-serif; color: rgb(0, 0, 0);">Entertainment</h5><p style="color: rgb(111, 111, 111); line-height: 24px;">One of the greatest things about Las Vegas, Reno and Atlantic City (but especially Las Vegas) is the number of shows that are available. You can get to watch top class comedians like Jay Leno, Jerry Seinfeld, Ray Romano, Tim Allen and even the likes of Bill Cosby and Chris Rock. If you are into music you can watch female singers like Celine Dion, Mariah Carey, Britney Spears, Christina Aguilera and Beyonc?, male performers like Phil Collins, Eric Clapton, Snoopy Dog and bands like Oasis and Bon Jovi. I could go on and on but the list is endless. If you are into magic you can watch magicians like David Copperfield do their thing meters from you. Whatever you like, you can find it here from Western music to oldies to Jazz, Rock, Heavy Mettle to Trance. All you have to do is look at the itenary offered during your visit</p>',
                'images'           => '[{"title":"Blog img37","caption":"Blog img37","url":"Blog img37","desc":null,"folder":"2021\/08\/13\/121214839\/images","time":"2021-08-13 12:17:20","path":"blog\/blog\/2021\/08\/13\/121214839\/images\/blog-img37.jpeg","file":"blog-img37.jpeg"}]',
                'tags'             => NULL,
                'viewcount'        => NULL,
                'slug'             => 'Design is thinking made visual',
                'published'        => 'yes',
                'published_at'     => '2021-07-17',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 2,
                'category_id'      => 1,
                'title'            => 'Design is thinking made visual-1',
                'description'      => '<p style="color: rgb(111, 111, 111); line-height: 24px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h3 style="font-family: Roboto, sans-serif; color: rgb(0, 0, 0);">Microsoft Patch Management For Home Users</h3><p style="color: rgb(111, 111, 111); line-height: 24px;">Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then, she likes it and this supports us too, so I went along without any hassle. At first I was depressed, but then as I asked around and looked around, I ended up having more fun in Las Vegas than I would have thought. And no. I did not enter a single casino while I was there.</p><h5 style="font-family: Roboto, sans-serif; color: rgb(0, 0, 0);">Entertainment</h5><p style="color: rgb(111, 111, 111); line-height: 24px;">One of the greatest things about Las Vegas, Reno and Atlantic City (but especially Las Vegas) is the number of shows that are available. You can get to watch top class comedians like Jay Leno, Jerry Seinfeld, Ray Romano, Tim Allen and even the likes of Bill Cosby and Chris Rock. If you are into music you can watch female singers like Celine Dion, Mariah Carey, Britney Spears, Christina Aguilera and Beyonc?, male performers like Phil Collins, Eric Clapton, Snoopy Dog and bands like Oasis and Bon Jovi. I could go on and on but the list is endless. If you are into magic you can watch magicians like David Copperfield do their thing meters from you. Whatever you like, you can find it here from Western music to oldies to Jazz, Rock, Heavy Mettle to Trance. All you have to do is look at the itenary offered during your visit</p>',
                'images'           => '[{"title":"Blog img38","caption":"Blog img38","url":"Blog img38","desc":null,"folder":"2021\/08\/13\/121945933\/images","time":"2021-08-13 12:20:19","path":"blog\/blog\/2021\/08\/13\/121945933\/images\/blog-img38.jpeg","file":"blog-img38.jpeg"}]',
                'tags'             => NULL,
                'viewcount'        => NULL,
                'slug'             => 'Design is thinking made visual-1',
                'published'        => 'yes',
                'published_at'     => '2021-07-17',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            [
                'id'               => 3,
                'category_id'      => 4,
                'title'            => 'Design is thinking made visual-2',
                'description'      => '<p style="color: rgb(111, 111, 111); line-height: 24px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><h3 style="font-family: Roboto, sans-serif; color: rgb(0, 0, 0);">Microsoft Patch Management For Home Users</h3><p style="color: rgb(111, 111, 111); line-height: 24px;">Last month, my wife, Anne Doe, took me to Las Vegas because she had to go for a business convention. Needless to say, she writes for an guide to casinos and I hate gambling. But then, she likes it and this supports us too, so I went along without any hassle. At first I was depressed, but then as I asked around and looked around, I ended up having more fun in Las Vegas than I would have thought. And no. I did not enter a single casino while I was there.</p><h5 style="font-family: Roboto, sans-serif; color: rgb(0, 0, 0);">Entertainment</h5><p style="color: rgb(111, 111, 111); line-height: 24px;">One of the greatest things about Las Vegas, Reno and Atlantic City (but especially Las Vegas) is the number of shows that are available. You can get to watch top class comedians like Jay Leno, Jerry Seinfeld, Ray Romano, Tim Allen and even the likes of Bill Cosby and Chris Rock. If you are into music you can watch female singers like Celine Dion, Mariah Carey, Britney Spears, Christina Aguilera and Beyonc?, male performers like Phil Collins, Eric Clapton, Snoopy Dog and bands like Oasis and Bon Jovi. I could go on and on but the list is endless. If you are into magic you can watch magicians like David Copperfield do their thing meters from you. Whatever you like, you can find it here from Western music to oldies to Jazz, Rock, Heavy Mettle to Trance. All you have to do is look at the itenary offered during your visit</p>',
                'images'           => '[{"title":"Blog img39","caption":"Blog img39","url":"Blog img39","desc":null,"folder":"2021\/08\/16\/132431165\/images","time":"2021-08-16 13:24:39","path":"blog\/blog\/2021\/08\/16\/132431165\/images\/blog-img39.jpeg","file":"blog-img39.jpeg"}]',
                'tags'             => NULL,
                'viewcount'        => NULL,
                'slug'             => 'Design is thinking made visual-2',
                'published'        => 'yes',
                'published_at'     => '2021-07-17',
                'user_id'          => 1,
                'user_type'        => 'App\Models\User',
            ],
            
        ]);

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
                'slug'      => 'blog.blog.view',
                'name'      => 'View Blog',
            ],
            [
                'slug'      => 'blog.blog.create',
                'name'      => 'Create Blog',
            ],
            [
                'slug'      => 'blog.blog.edit',
                'name'      => 'Update Blog',
            ],
            [
                'slug'      => 'blog.blog.delete',
                'name'      => 'Delete Blog',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/blog/blog',
                'name'        => 'Blog',
                'description' => null,
                'icon'        => 'las la-blog',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/blog/blog',
                'name'        => 'Blog',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'blog',
                'name'        => 'Blog',
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
                'module'    => 'Blog',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'blog.blog.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
