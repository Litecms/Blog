<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('blogs')->insert([
            [
                'category_id'   => '1',
                'title'         => 'Lorem ipsum dolor sit amet',
                'slug'          => 'lorem-ipsum-dolor-sit-amet',
                'details'       => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,',
                'user_id'       => '1',
                'upload_folder' => '',
                'image'         => '',
                'images'        => '[{"folder":"\\/uploads\\/blogs\\/2016\\/07\\/16\\/092814204\\/images\\/","file":"blog3.jpg","caption":"Blog3","time":"2016-07-16 09:29:28","efolder":"blogs\\/pZZPuAh3FjlPQJ\\/images"},{"folder":"\\/uploads\\/blogs\\/2016\\/07\\/16\\/092814204\\/images\\/","file":"blog5.jpg","caption":"Blog5","time":"2016-07-16 09:29:28","efolder":"blogs\\/pZZPuAh3FjlPQJ\\/images"}]',
                'viewcount'     => '0',
                'published'     => 'Yes',
                'status'        => 'Show',
                'posted_on'     => '2016-07-16',
                'created_at'    => '2016-07-16 09:29:32',
                'updated_at'    => '2016-07-16 09:29:37',
                'deleted_at'    => null,
            ],
            [
                'category_id'   => '2',
                'title'         => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium',
                'slug'          => 'sed-ut-perspiciatis-unde-omnis-iste-natus-error-sit-voluptatem-accusantium-doloremque-laudantium',
                'details'       => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere',
                'user_id'       => '1',
                'upload_folder' => '',
                'image'         => '',
                'images'        => '[{"folder":"\\/uploads\\/blogs\\/2016\\/07\\/16\\/092951706\\/images\\/","file":"blog1.jpg","caption":"Blog1","time":"2016-07-16 09:30:26","efolder":"blogs\\/v44EtDhkFkdJY1\\/images"},{"folder":"\\/uploads\\/blogs\\/2016\\/07\\/16\\/092951706\\/images\\/","file":"blog5.jpg","caption":"Blog5","time":"2016-07-16 09:30:26","efolder":"blogs\\/v44EtDhkFkdJY1\\/images"}]',
                'viewcount'     => '0',
                'published'     => 'Yes',
                'status'        => 'Show',
                'posted_on'     => '2016-07-16',
                'created_at'    => '2016-07-16 09:30:38',
                'updated_at'    => '2016-07-16 09:30:38',
                'deleted_at'    => null,
            ],
            [

                'category_id'   => '1',
                'title'         => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium',
                'slug'          => 'sed-ut-perspiciatis-unde-omnis-iste-natus-error-sit-voluptatem-accusantium',
                'details'       => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere',
                'user_id'       => '1',
                'upload_folder' => '',
                'image'         => '',
                'images'        => '[{"folder":"\\/uploads\\/blogs\\/2016\\/07\\/16\\/093200672\\/images\\/","file":"blog2.jpg","caption":"Blog2","time":"2016-07-16 09:32:58","efolder":"blogs\\/mkkecVh0FXQpqp\\/images"},{"folder":"\\/uploads\\/blogs\\/2016\\/07\\/16\\/093200672\\/images\\/","file":"blog3.jpg","caption":"Blog3","time":"2016-07-16 09:33:00","efolder":"blogs\\/mkkecVh0FXQpqp\\/images"}]',
                'viewcount'     => '0',
                'published'     => 'Yes',
                'status'        => 'Show',
                'posted_on'     => '2016-07-16',
                'created_at'    => '2016-07-16 09:33:01',
                'updated_at'    => '2016-07-16 09:33:01',
                'deleted_at'    => null,
            ],
        ]);

        DB::table('blog_categories')->insert([
            [
                'id'         => '1',
                'user_id'    => '1',
                'name'       => 'Food',
                'slug'       => 'food',
                'status'     => 'Show',
                'created_at' => '2016-07-16 09:27:40',
                'updated_at' => '2016-07-16 09:27:40',
                'deleted_at' => null,
            ],
            [
                'id'         => '2',
                'user_id'    => '1',
                'name'       => 'Shopping',
                'slug'       => 'shopping',
                'status'     => 'Show',
                'created_at' => '2016-07-16 09:28:10',
                'updated_at' => '2016-07-16 09:28:10',
                'deleted_at' => null,
            ],
        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'blog.blog.view',
                'name' => 'View Blog',
            ],
            [
                'slug' => 'blog.blog.create',
                'name' => 'Create Blog',
            ],
            [
                'slug' => 'blog.blog.edit',
                'name' => 'Update Blog',
            ],
            [
                'slug' => 'blog.blog.delete',
                'name' => 'Delete Blog',
            ],
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
                'parent_id' => 1,
                'key'       => null,
                'url'       => 'admin/blog/blog',
                'name'      => 'Blog',
                'icon'      => 'fa fa-th-large',
                'target'    => null,
                'order'     => 1,
                'status'    => 1,
            ],

            [
                'parent_id' => 1,
                'key'       => null,
                'url'       => 'admin/blog/category',
                'name'      => 'Blog Category',
                'icon'      => 'fa fa-bars',
                'target'    => null,
                'order'     => 1,
                'status'    => 1,
            ],

            [
                'parent_id' => 2,
                'key'       => null,
                'url'       => 'user/blog/blog',
                'name'      => 'Blog',
                'icon'      => 'icon-speech',
                'target'    => null,
                'order'     => 1,
                'status'    => 1,
            ],

            [
                'parent_id' => 3,
                'key'       => null,
                'url'       => 'blogs',
                'name'      => 'Blog',
                'icon'      => null,
                'target'    => null,
                'order'     => 1,
                'status'    => 1,
            ],

        ]);
        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
            'key'      => 'blog.blog.key',
            'name'     => 'Some name',
            'value'    => 'Some value',
            'type'     => 'Default',
            ],
             */
            // Uncomment  and edit this section for entering value to settings table.
            /*
        [
        'key'      => 'blog.category.key',
        'name'     => 'Some name',
        'value'    => 'Some value',
        'type'     => 'Default',
        ],
         */
        ]);
    }
}
