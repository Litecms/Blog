<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.blog.blog.model.table'))->insert([
            [
                'id' => '1', 
                'category_id' => '4', 
                'title' => '6 Winning Shipping Strategies for E-Commerce SMBs', 
                'caption' => '6 Winning Shipping Strategies for E-Commerce SMBs', 
                'description' => '', 
                'images' => '[{"title":"Xl 2017 ecommerce shipping 1","caption":"Xl 2017 ecommerce shipping 1","url":"Xl 2017 ecommerce shipping 1","desc":null,"folder":"2018\\/09\\/12\\/112919262\\/images","time":"2018-09-12 11:31:54","path":"blog\\/blog\\/2018\\/09\\/12\\/112919262\\/images\\/xl-2017-ecommerce-shipping-1.jpg","file":"xl-2017-ecommerce-shipping-1.jpg"}]', 
                'tags' => '["Technology","Advertisements"]', 
                'viewcount' => '3', 
                'slug' => '6-winning-shipping-strategies-for-e-commerce-smbs', 
                'meta_title' => '6 Winning Shipping Strategies for E-Commerce SMBs', 
                'meta_description' => null, 
                'meta_keyword' => null, 
                'published' => 'yes', 
                'published_at' => '2018-10-15 00:00:00', 
                'user_type' => 'App\\User', 
                'user_id' => '1', 
                'upload_folder' => null, 
                'deleted_at' => null, 
                'created_at' => '2018-09-12 11:32:05', 
                'updated_at' => '2018-10-15 08:29:35'
            ],
            [
                'id' => '2', 
                'category_id' => '5', 
                'title' => 'New Dell 2-in-1 Devices Built for the Fast-Paced Small Business Owner', 
                'caption' => 'New Dell 2-in-1 Devices Built for the Fast-Paced Small Business Owner', 
                'description' => '<p>US-based Dell (NYSE: DVMT) launched a slew of devices at the recent IFA in Berlin, including the new Inspiron 5000 and 7000 laptops, Vostro 14 and 15 5000 and premium 27 USB-C ultrathin displays and entry-level SE monitors. Dell says the new devices are built to deliver top performance to everyday users and even fast-paced small business owners.In a statement, Ray Wah, Senior Vice President and General Manager of Consumer and Small Business at Dell said the company has invested to demonstrate an ongoing dedication to deliver quality devices by redesigning the company’s portfolio of two-in-ones and mainstream laptops with thoughtful features, beautiful designs and premium materials. The new Inspiron 14 5000 2-in-1 got a sleek look and a narrow border that keeps the focus on the IPS, Active Pen compatible touchscreen.&nbsp; Another important feature is the USB Type-C port you can use to transfer data, hook up to external monitors or charge the laptop. The Inspiron 5000 will be available starting at $599.99. The Inspiron 7000 2-in 1 comes in 13-inch, 15-inch and 17-inch variants and all feature 8th generation Intel Core processors and up to 16GB of DDR4 memory. You’ll find many similar features on the Inspiron 7000 variants, but the Black Edition specifically comes with a UHD screen with a 72 percent color coverage and 300 nits typical brightness for a beautiful, premium image. The 13 and 15-inch Inspiron 7000 will be available starting at $879.99 and $849.99 respectively. The 15-inch Black Edition will start at $1,249.99 while the 17-inch will be available starting at $1,099.99.</p><p>Dell has also expanded its Vostro portfolio with new Vostro 14 and 15 5000 laptops specifically built to help small and medium-sized businesses tackle daily challenges with the latest technologies. Using their Peak Shift feature, these laptops will help you save on power as they automatically switch the system to battery power during certain times of the day, even if the system is plugged into a direct power source.Also, besides its Single-Sign-On fingerprint reader feature, USB Type-C port and 8th Generation Intel Core processors, this line will also safe guard your machines with Trusted Platform Module 2.0, which provides commercial-grade protection while BitLocker allows you to configure your security settings. The new Vostro’s will be available starting at $499.99. The XPS 13 — Dell’s smallest 13-inch laptop — now comes with a new Intel 8th Generation i3 processor. The XPS 13 2-in-1 has also been updated with up to 8th Gen Intel Core i5 and i7 processors.<br></p>', 
                'images' => '[{"title":"Dell 1 850x476","caption":"Dell 1 850x476","url":"Dell 1 850x476","desc":null,"folder":"2018\\/09\\/12\\/113707697\\/images","time":"2018-09-12 11:37:48","path":"blog\\/blog\\/2018\\/09\\/12\\/113707697\\/images\\/dell-1-850x476.png","file":"dell-1-850x476.png"}]', 
                'tags' => '["Business"]', 
                'viewcount' => '4', 
                'slug' => 'new-dell-2-in-1-devices-built-for-the-fast-paced-small-business-owner',
                'meta_title' => 'New Dell 2-in-1 Devices Built for the Fast-Paced Small Business Owner', 
                'meta_description' => null, 
                'meta_keyword' => null, 
                'published' => 'yes', 
                'published_at' => '2018-09-19 00:00:00', 
                'user_type' => 'App\\User', 
                'user_id' => '1', 
                'upload_folder' => null, 
                'deleted_at' => null, 
                'created_at' => '2018-09-12 11:38:05', 
                'updated_at' => '2018-10-15 08:29:47'
            ],
            [
                'id' => '3', 
                'category_id' => '1', 
                'title' => 'Google Pixel 3 and 3 XL rumors!', 
                'caption' => 'Google Pixel 3 and 3 XL rumors!', 
                'description' => '<p>The time for the new Pixel device is almost here, and we already have the date for the official announcement. Mark the 9th of October, as per the official invites the company sent. The event will take place in New York, and we’re expecting a lot of different new products from them to be introduced. One of them for sure will be the Google Pixel 3 and 3XL, and we already have a lot of rumors about them. Heck, there were even few unboxings of the device, a full review and pictures from the backseat of a Lyft ride. Nevertheless, here are some of the details about the next Google Pixel 3!</p><p><b>Design</b></p><p>Starting with the design, you’ve probably seen all the videos and pictures from the leaked Google Pixel 3 XL. And there are quite some changes compared to the Pixel 2 and 2 XL. The front is the first place where those changes can be seen. Namely, the Pixel 3 XL will feature a notch on the top. And sadly, it’s one of the ugliest we’ve ever seen. Since it has to house two cameras and the speaker, it’s pretty big. Furthermore, it also makes the header bar big, giving out a lot of unused space. We were expecting for them to make a smartphone with a notch, seeing that Android P supports them natively. But, we weren’t expecting it to be this bag (and ugly). Rotating to the back, and you can notice that the device will feature the similar design as the Pixel 2. You will still find the two-toned back, possibly in the same color options as now. The single camera is still present in the top corner. The Pixel 2 had one of the best cameras on a smartphone, thanks to their software processing. The button is still going to be differently colored on some color options, like the Panda version of the 2 XL.</p><p><b>Features</b></p><p>On the inside, we’re expecting the best that is available right now. That means the Snapdragon 845 chipset accompanied with the Adreno 630 GPU. That combination is the one found on most flagships from this year, and we’re pretty sure both devices will get it. For RAM, rumors suggest that the Pixel 3 XL will have 4GB of RAM. That is somewhat low for today’s standards, but I believe that there will be different memory options. Aside from that, Pixel devices have always been the fastest ones. Furthermore, the battery on the XL should have 3430mAh capacity. It is smaller than last year’s 2 XL, and with the bigger display, we’re a bit worried here. However, you’re still supposed to get a full day of use, depending on your usage.</p><p><b>Pricing and availability</b></p><p>For availability, we already know the date when both devices will be announced. As we said before, October 9th is when Google will officially announce both devices. They should be available for purchase in late October. However, there are no rumors about both prices yet.</p>', 
                'images' => '[{"title":"Googlepixel3xlrumors","caption":"Googlepixel3xlrumors","url":"Googlepixel3xlrumors","desc":null,"folder":"2018\\/09\\/12\\/114145481\\/images","time":"2018-09-12 11:42:18","path":"blog\\/blog\\/2018\\/09\\/12\\/114145481\\/images\\/googlepixel3xlrumors.jpg","file":"googlepixel3xlrumors.jpg"}]', 
                'tags' => '["Technology","Smartphones"]', 
                'viewcount' => '10', 
                'slug' => 'google-pixel-3-and-3-xl-rumors', 
                'meta_title' => 'Google Pixel 3 and 3 XL rumors!', 
                'meta_description' => null, 
                'meta_keyword' => null, 
                'published' => 'yes', 
                'published_at' => '2018-09-12 00:00:00', 
                'user_type' => 'App\\User', 
                'user_id' => '1', 
                'upload_folder' => null, 
                'deleted_at' => null, 
                'created_at' => '2018-09-12 11:42:34', 
                'updated_at' => '2018-10-15 08:30:12'],
        ]);
        DB::table(config('litecms.blog.category.model.table'))->insert([
            [
                'id'        => '1',
                'name'       => 'Smartphones',
                'slug'       => 'smartphones',
                'status'     => 'Show',
                'user_type'  => 'App\\User',
                'user_id'    => '1',
                'created_at' => '2018-05-29 10:09:16', 'deleted_at' => null
            ],
            [
                'id'        => '2',
                'name'       => 'General',
                'slug'       => 'general',
                'status'     => 'Show',
                'user_type'  => 'App\\User',
                'user_id'    => '1',
                'created_at' => '2018-09-12 07:31:29',
                'deleted_at' => null
            ],
            [
                'id'        => '4',
                'name'       => 'Business',
                'slug'       => 'business',
                'status'     => 'Show',
                'user_type'  => 'App\\User',
                'user_id'    => '1',
                'created_at' => '2018-09-12 11:34:34',
                'deleted_at' => null
            ],
            [
                'id'        => '5',
                'name'       => 'Electronic Gadgets',
                'slug'       => 'electronic-gadgets',
                'status'     => 'Show',
                'user_type'  => 'App\\User',
                'user_id'    => '1',
                'created_at' => '2018-09-12 11:36:52',
                'deleted_at' => null],

        ]);
        DB::table(config('litecms.blog.tag.model.table'))->insert([
            [
                'id' => '1', 
                'name' => 'Smartphones', 
                'frequency' => null, 
                'slug' => 'smartphones', 
                'status' => 'Show', 
                'deleted_at' => null, 
                'created_at' => '2018-10-15 06:20:06', 
                'updated_at' => '2018-10-15 08:16:51'
            ],
            [
                'id' => '2', 
                'name' => 'Technology', 
                'frequency' => null, 
                'slug' => 'technology', 
                'status' => 'Show', 
                'deleted_at' => null, 
                'created_at' => '2018-10-15 06:20:18', 
                'updated_at' => '2018-10-15 08:17:07'
            ],
            [
                'id' => '3', 
                'name' => 'Advertisements', 
                'frequency' => null, 
                'slug' => 'advertisement', 
                'status' => 'Show', 
                'deleted_at' => null, 
                'created_at' => '2018-10-15 06:20:31', 
                'updated_at' => '2018-10-15 08:06:14'
            ],
            [
                'id' => '4', 
                'name' => 'Business', 
                'frequency' => null, 
                'slug' => 'business', 
                'status' => 'Show', 
                'deleted_at' => null, 
                'created_at' => '2018-10-15 06:20:50', 
                'updated_at' => '2018-10-15 08:06:20'],
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
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/blog/blog',
                'name'        => 'Blog',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 4,
                'key'         => null,
                'url'         => 'blogs',
                'name'        => 'Blog',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],
            [
                'parent_id'   => 5,
                'key'         => null,
                'url'         => 'blogs',
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
