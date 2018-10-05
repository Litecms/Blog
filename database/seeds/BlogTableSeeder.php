<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.blog.blog.model.table'))->insert([
            ['id'           => '1',
                'category_id'   => '1',
                'title'         => '6 Winning Shipping Strategies for E-Commerce SMBs',
                'caption'       => '6 Winning Shipping Strategies for E-Commerce SMBs',
                'description'   => '<p class="story-body" style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">E-commerce continues to become more competitive as large companies like Amazon, Target and Walmart soak up market share and customer attention. Shipping window expectations have become shorter, and many online retailers struggle to keep up, particularly small to medium-sized businesses. How can SMBs compete?</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Not only is competing possible, there are many SMBs that have been finding exceptional success through smart and streamlined optimization of their processes, and have been using their unique place in the market to stand out from larger competitors.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Attempting to compete dollar for dollar with large corporations is a losing strategy. Instead, SMBs need to focus on their approach to internal processes, minimizing costs to compete in the market, and building repeat business from customers who already have purchased from them. Following are strategies that can help SMBs win more business and revenue in today\'s fiercely competitive market.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"><strong>1. Automate order processing wherever possible.</strong></p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Larger businesses have the luxury of dedicated shipping teams and departments -- a luxury not always afforded to up-and-coming SMBs. Whether your shipping is handled by a "department of one" or members of a small team who manage it when they can, having automation in place can help avoid costly mistakes and maximize time spent on building your business.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Automation may sound out of reach and complex for some SMBs, but it really comes down to creating rules to tell a shipping technology how to process tasks. Depending on the software, setup can be relatively simple with straightforward IF/THEN statements.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">For example, let\'s say you have set up your shopping cart to allow customers to choose the carrier service for their orders. Using a combination of shipping automation, a shipping category, and saved carrier selections, you can set up a rule to automatically apply the correct label options as soon as the order pulls in.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Filter your orders by the category you created and batch print labels for all orders using that carrier type. Adding this automation rule, and others like it, literally can cut hours per day spent processing shipments one by one.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">In some cases, automation can even be set up to purchase and print labels without a human touching the shipping software. Couple this with automation to print a packing slip at the same time as the label, and the shipment just needs to be packed up and sent out the door.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Automating the label purchase and printing process is just one way automation helps online sellers streamline. When SMBs take a multichannel approach to selling, automatic order import into one central platform -- a feature offered by several shipping software technologies -- can help import orders from those channels to manage them all at once.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Without having to retrieve orders manually from each selling platform, SMBs can save precious time, not to mention avoid mistakes and missed orders.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"><strong>2. Decrease/optimize costs to offer free, fast shipping.</strong></p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Many SMBs fall into the rut of shipping one way and one way only, because they don\'t have the time to research and compare. What they seemingly save in time could be incurring heavy costs to the bottom line.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">The most important element of minimizing shipping costs is ensuring that you have the best rates. That means gaining access to Commercial Plus Pricing from&nbsp;<a class="story-keyword-offsite" href="http://www.usps.com/" style="color: rgb(21, 66, 150);">USPS</a>. (As you scale and grow, you be able to negotiate rates with FedEx and/or UPS.) CPP rates from USPS can be obtained through most shipping software providers, historically reserved for only the highest-volume shippers.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Once you have access to these rates, you can optimize your shipping methods based on delivery window, distance, weight and more. You can take advantage of additional features you may need, such as signatures, delivery confirmation or insurance. This is where shipping software becomes particularly useful.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Rather than browsing from carrier page to carrier page, you can select your carrier and shipment method in one screen, drastically cutting down time. It\'s even possible to set up saved carrier selections, which act like quick reference options to access often-used shipping methods.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Your rates aren\'t the only way to optimize your shipping costs. Many online sellers don\'t realize that there are cost savings in using recommended packaging from USPS, FedEx and UPS. Additionally, you can have that packaging delivered right to your door, absolutely free. Here are links to each carriers\' page detailing which supplies are free:</p><ul style="list-style-position: inside; color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"><li style="margin: 10px 0px;"><a href="https://store.usps.com/store/results/business-free-shipping-supplies/_/N-1935rfl?_requestid=1374851" target="_blank" style="color: rgb(21, 66, 150);">USPS</a></li><li style="margin: 10px 0px;"><a href="https://www.fedex.com/id/supplies/" target="_blank" style="color: rgb(21, 66, 150);">FedEx</a></li><li style="margin: 10px 0px;"><a href="https://www.ups.com/dropoff?loc=en_US" target="_blank" style="color: rgb(21, 66, 150);">UPS</a>&nbsp;(log-in required)</li></ul><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">When you\'re comparing carriers and rates, you minimize the effect on your bottom line of offering free shipping to your customers.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Perhaps you simply cannot afford to offer free shipping outright, even with great shipping rates. That doesn\'t mean it\'s completely inaccessible to you. Threshold-based free shipping, which encourages customers to reach a certain item or spending threshold to "earn" free shipping, is a smart way to make free shipping less of a cost burden.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">By increasing your average order size/value, your business can offset the added cost of covering free shipping. As long as the threshold isn\'t unattainable or unfairly high, customers often are willing to add another item or two to get free shipping, particularly from an SMB they want to support.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Even with all of the above optimizations and approaches, shipping may still end up being, at best, a breakeven element of your business. With large marketplaces like Amazon and Walmart continually pushing the expectations customers have, shipping may not end up being a money-making endeavor for SMBs, but you can still stay competitive and in consideration with online shoppers.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"><strong>3. Tie order and shipping data to customer relationship management.</strong></p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">A competitive advantage that SMBs can have over larger businesses in e-commerce is the trusting relationship they can create with customers. SMBs are often less likely to be seen as the faceless company. This opens up the ability to create more brand affinity, which can lead to repeat business and lifelong customers.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Eighty-one percent of consumers want brands that understand them better, according to MarTech Today. Many brands and marketers simply aren\'t successfully making the effort to connect -- even with the data available to create personalized experiences.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">This is where smart SMB owners can capitalize through a combination of online buyer data, data collection to further personalize down the funnel, and personalized marketing to build business.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"><strong>4. Use buyer data to personalize the ordering experience.</strong></p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">You already know the name and location of your customers or the recipients of their orders. Your confirmation emails and packing slips should reflect this. Consider including a personalized note, thanking them for their purchase.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Is your store set up to allow people to mark something as a gift? If so, the packing slip shouldn\'t note how much the item costs.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Is a customer a first-time buyer? Welcome them with a unique welcome message in the confirmation email or packing slip, possibly sending them to your social pages to gain access to special deals.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">If there\'s a repeat purchase or a top customer, recognize that and make a customer feel special. Small details like this help you form a better relationship with your customers through a more personalized experience -- often easily done through automation.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"><strong>5. Move customers further down the funnel with purchase data.</strong></p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">SMBs now have automation tools available to them at price points that businesses of this size actually can afford. These tools allow SMBs to begin building out customer profiles and trigger email marketing campaigns based on purchase behavior, items purchased, personalized information like birthdays and anniversaries, and more. Some of this information is readily available to you, and some you will need to actively collect.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">For example, you know when a customer\'s first order is. This is something you can easily point out, celebrate, and use to encourage another purchase or to further develop the relationship with your customers.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Same goes for the last time a customer marked a purchase as a gift. Triggering a reminder email a year later is an opportunity to invite another purchase. These personalized moments move your customer further down the funnel from occasional buyer, to repeat buyer, to lifelong raving fan.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">When you tie shipping and order data to your marketing, you create a powerful brand experience that can end up helping your bottom line. Personally identifying information like geographic location can allow you to create more localized marketing experiences to show your customers you know more than just who they are -- you know where they are. It also can allow you to create shipping promotions to customers it may be cheaper to ship to.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"><strong>6. Turn shipping data into marketing data.</strong></p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">This goes beyond sending "Hello, [name]" emails. That level of personalization has become relative table stakes. Putting order and shipping data to work for you in conjunction with marketing automation, you can really drive brand experiences with your customers.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Customers want brands to understand them better. Product recommendations based on previous purchases show your customers that you know what they\'ve bought from you, and that you\'re able to anticipate their next need, offer that perfectly complementary item, or know when their purchase is about to run out and require a refill. All of this can be automated.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">For example, let\'s say you sell beauty supplies or makeup. You likely have a general idea when a customer might be nearing time for a repurchase. Using email automation and order data, you can set up a campaign using parameters such as this:</p><blockquote style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">If purchased item equals X, send X days after an order is shipped (or delivered, if that is supported).</blockquote><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">Then, when the product is almost gone, your customer will receive an email promotion reminder to refill from your store, perhaps heading off any inclination to look elsewhere. This creates a loyal, repeat buyer because it shows you\'re paying attention and fulfilling a customer\'s particular needs. Successfully growing businesses are built on repeat business relationships.</p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;"></p><p style="color: rgb(50, 50, 50); font-family: verdana, arial, helvetica; font-size: 16px;">All these tactics are accessible to the vast majority of SMBs. After a little research and investment up front, the combination of data, automation and optimization can set up any SMB for success</p>',
                'images'        => '[{"title":"Xl 2017 ecommerce shipping 1","caption":"Xl 2017 ecommerce shipping 1","url":"Xl 2017 ecommerce shipping 1","desc":null,"folder":"2018\\/09\\/12\\/112919262\\/images","time":"2018-09-12 11:31:54","path":"blog\\/blog\\/2018\\/09\\/12\\/112919262\\/images\\/xl-2017-ecommerce-shipping-1.jpg","file":"xl-2017-ecommerce-shipping-1.jpg"}]',
                'tags'          => '[""]',
                'viewcount'     => null, 'slug'       => '6-winning-shipping-strategies-for-e-commerce-smbs',
                'published'     => 'yes',
                'published_at'  => '2018-09-17',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null, 'created_at' => '2018-09-12 11:32:05',
                'deleted_at'    => null],
            ['id'           => '2',
                'category_id'   => '5',
                'title'         => 'New Dell 2-in-1 Devices Built for the Fast-Paced Small Business Owner',
                'caption'       => 'New Dell 2-in-1 Devices Built for the Fast-Paced Small Business Owner',
                'description'   => '<p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;">US-based Dell (NYSE: DVMT) launched a slew of devices at the recent IFA in Berlin, including the new Inspiron 5000 and 7000 laptops, Vostro 14 and 15 5000 and premium 27 USB-C ultrathin displays and entry-level SE monitors. Dell says the new devices are built to deliver top performance to everyday users and even fast-paced small business owners.<span id="ezoic-pub-ad-placeholder-154" class="ezoic-adpicker-ad" style="padding: 0px; margin: 0px; list-style: none; border: 0px;"></span></p><p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;">In a&nbsp;<a href="https://www.dell.com/learn/us/en/vn/press-releases/2018-08-29-dell-brings-new-modern-innovative-devices-for-consumers-and-small-businesses-at-ifa-2018" target="_blank" rel="noopener" style="padding: 0px; margin: 0px; list-style: none; border: 0px; color: rgb(0, 53, 217); transition-duration: 0.2s; transition-property: all; text-shadow: rgb(0, 53, 217) 0px 0px 0px;">statement</a>, Ray Wah, Senior Vice President and General Manager of Consumer and Small Business at Dell said the company has invested to demonstrate an ongoing dedication to deliver quality devices by redesigning the company’s portfolio of two-in-ones and mainstream laptops with thoughtful features, beautiful designs and premium materials.</p><p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;">The new Inspiron 14 5000 2-in-1 got a sleek look and a narrow border that keeps the focus on the IPS, Active Pen compatible touchscreen. &nbsp;Another important feature is the USB Type-C port you can use to transfer data, hook up to external monitors or charge the laptop. The Inspiron 5000 will be available starting at $599.99.</p><p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;"><span id="ezoic-pub-ad-placeholder-155" class="ezoic-adpicker-ad" style="padding: 0px; margin: 0px; list-style: none; border: 0px;"></span>The Inspiron 7000 2-in 1 comes in 13-inch, 15-inch and 17-inch variants and all feature 8th generation Intel Core processors and up to 16GB of DDR4 memory. You’ll find many similar features on the Inspiron 7000 variants, but the Black Edition specifically comes with a UHD screen with a 72 percent color coverage and 300 nits typical brightness for a beautiful, premium image. The 13 and 15-inch Inspiron 7000 will be available starting at $879.99 and $849.99 respectively. The 15-inch Black Edition will start at $1,249.99 while the 17-inch will be available starting at $1,099.99.</p><p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;">Dell has also expanded its Vostro portfolio with new Vostro 14 and 15 5000 laptops specifically built to help small and medium-sized businesses tackle daily challenges with the latest technologies. Using their Peak Shift feature, these laptops will help you save on power as they automatically switch the system to battery power during certain times of the day, even if the system is plugged into a direct power source.</p><p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;"></p><div class="quads-location quads-ad1" id="quads-ad1" style="padding: 0px; margin: 3px 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px; float: none; text-align: center;"><hr class="clear" style="padding: 0px; margin: 0px; list-style: none; border-top: 0px; clear: both; width: 0px; visibility: hidden;"><span id="ezoic-pub-ad-placeholder-106" style="padding: 0px; margin: 0px; list-style: none; border: 0px;"></span><hr class="clear" style="padding: 0px; margin: 0px; list-style: none; border-top: 0px; clear: both; width: 0px; visibility: hidden;"></div><div class="quads-location quads-ad1" id="quads-ad1" style="padding: 0px; margin: 3px 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px; float: none; text-align: center;"><hr class="clear" style="padding: 0px; margin: 0px; list-style: none; border-top: 0px; clear: both; width: 0px; visibility: hidden;"><hr class="clear" style="padding: 0px; margin: 0px; list-style: none; border-top: 0px; clear: both; width: 0px; visibility: hidden;"></div><p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;">Also, besides its Single-Sign-On fingerprint reader feature, USB Type-C port and 8th Generation Intel Core processors, this line will also safe guard your machines with Trusted Platform Module 2.0, which provides commercial-grade protection while BitLocker allows you to configure your security settings. The new Vostro’s will be available starting at $499.99.<span id="ezoic-pub-ad-placeholder-156" class="ezoic-adpicker-ad" style="padding: 0px; margin: 0px; list-style: none; border: 0px;"></span></p><p style="padding: 10px 0px; margin-bottom: 0px; list-style: none; border: 0px; color: rgb(51, 51, 51); font-family: &quot;open sans&quot;, sans-serif; font-size: 16px;">The XPS 13 — Dell’s smallest 13-inch laptop — now comes with a new Intel 8th Generation i3 processor. The XPS 13 2-in-1 has also been updated with up to 8th Gen Intel Core i5 and i7 processors.</p>',
                'images'        => '[{"title":"Dell 1 850x476","caption":"Dell 1 850x476","url":"Dell 1 850x476","desc":null,"folder":"2018\\/09\\/12\\/113707697\\/images","time":"2018-09-12 11:37:48","path":"blog\\/blog\\/2018\\/09\\/12\\/113707697\\/images\\/dell-1-850x476.png","file":"dell-1-850x476.png"}]',
                'tags'          => '["Lenovo"]',
                'viewcount'     => null, 'slug'       => 'new-dell-2-in-1-devices-built-for-the-fast-paced-small-business-owner',
                'published'     => 'yes',
                'published_at'  => '2018-09-19',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null, 'created_at' => '2018-09-12 11:38:05',
                'deleted_at'    => null],
            ['id'           => '3',
                'category_id'   => '1',
                'title'         => 'Google Pixel 3 and 3 XL rumors!',
                'caption'       => 'Google Pixel 3 and 3 XL rumors!',
                'description'   => '<p style="-webkit-font-smoothing: antialiased; margin-bottom: 32px; border: 0px; font-family: Roboto, sans-serif; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(119, 119, 119); line-height: 23px; background-color: rgb(252, 252, 252);">The time for the new Pixel device is almost here, and we already have the date for the official announcement. Mark the 9<span style="-webkit-font-smoothing: antialiased; font-size: 10.5px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; height: 0px;">th</span>&nbsp;of October, as per the official invites the company sent. The event will take place in New York, and we’re expecting a lot of different new products from them to be introduced. One of them for sure will be the Google Pixel 3 and 3XL, and we already have a lot of rumors about them. Heck, there were even few unboxings of the device, a full review and pictures from the backseat of a Lyft ride. Nevertheless, here are some of the details about the next Google Pixel 3!</p><h2 style="-webkit-font-smoothing: antialiased; font-family: &quot;Playfair Display&quot;, serif; font-weight: 700; margin: 0px 0px 20px; font-size: 21px; border: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; background-color: rgb(252, 252, 252); color: rgb(31, 31, 31) !important;">Design</h2><p style="-webkit-font-smoothing: antialiased; margin-bottom: 32px; border: 0px; font-family: Roboto, sans-serif; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(119, 119, 119); line-height: 23px; background-color: rgb(252, 252, 252);">Starting with the design, you’ve probably seen all the videos and pictures from the leaked Google Pixel 3 XL. And there are quite some changes compared to the Pixel 2 and 2 XL. The front is the first place where those changes can be seen. Namely, the Pixel 3 XL will feature a notch on the top. And sadly, it’s one of the ugliest we’ve ever seen. Since it has to house two cameras and the speaker, it’s pretty big. Furthermore, it also makes the header bar big, giving out a lot of unused space. We were expecting for them to make a smartphone with a notch, seeing that Android P supports them natively. But, we weren’t expecting it to be this bag (and ugly).</p><p style="-webkit-font-smoothing: antialiased; margin-bottom: 32px; border: 0px; font-family: Roboto, sans-serif; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(119, 119, 119); line-height: 23px; background-color: rgb(252, 252, 252);">Rotating to the back, and you can notice that the device will feature the similar design as the Pixel 2. You will still find the two-toned back, possibly in the same color options as now. The single camera is still present in the top corner. The Pixel 2 had one of the best cameras on a smartphone, thanks to their software processing. The button is still going to be differently colored on some color options, like the Panda version of the 2 XL.</p><h2 style="-webkit-font-smoothing: antialiased; font-family: &quot;Playfair Display&quot;, serif; font-weight: 700; margin: 0px 0px 20px; font-size: 21px; border: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; background-color: rgb(252, 252, 252); color: rgb(31, 31, 31) !important;">Features</h2><p style="-webkit-font-smoothing: antialiased; margin-bottom: 32px; border: 0px; font-family: Roboto, sans-serif; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(119, 119, 119); line-height: 23px; background-color: rgb(252, 252, 252);">On the inside, we’re expecting the best that is available right now. That means the Snapdragon 845 chipset accompanied with the Adreno 630 GPU. That combination is the one found on most flagships from this year, and we’re pretty sure both devices will get it. For RAM, rumors suggest that the Pixel 3 XL will have 4GB of RAM. That is somewhat low for today’s standards, but I believe that there will be different memory options. Aside from that, Pixel devices have always been the fastest ones. Furthermore, the battery on the XL should have 3430mAh capacity. It is smaller than last year’s 2 XL, and with the bigger display, we’re a bit worried here. However, you’re still supposed to get a full day of use, depending on your usage.</p><h2 style="-webkit-font-smoothing: antialiased; font-family: &quot;Playfair Display&quot;, serif; font-weight: 700; margin: 0px 0px 20px; font-size: 21px; border: 0px; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; background-color: rgb(252, 252, 252); color: rgb(31, 31, 31) !important;">Pricing and availability</h2><p style="-webkit-font-smoothing: antialiased; margin-bottom: 32px; border: 0px; font-family: Roboto, sans-serif; outline-style: initial; outline-width: 0px; padding: 0px; vertical-align: baseline; color: rgb(119, 119, 119); line-height: 23px; background-color: rgb(252, 252, 252);">For availability, we already know the date when both devices will be announced. As we said before, October 9<span style="-webkit-font-smoothing: antialiased; font-size: 10.5px; line-height: 0; position: relative; vertical-align: baseline; top: -0.5em; border: 0px; font-family: inherit; font-style: inherit; font-weight: inherit; margin: 0px; outline-style: initial; outline-width: 0px; padding: 0px; height: 0px;">th</span>&nbsp;is when Google will officially announce both devices. They should be available for purchase in late October. However, there are no rumors about both prices yet.</p>',
                'images'        => '[{"title":"Googlepixel3xlrumors","caption":"Googlepixel3xlrumors","url":"Googlepixel3xlrumors","desc":null,"folder":"2018\\/09\\/12\\/114145481\\/images","time":"2018-09-12 11:42:18","path":"blog\\/blog\\/2018\\/09\\/12\\/114145481\\/images\\/googlepixel3xlrumors.jpg","file":"googlepixel3xlrumors.jpg"}]',
                'tags'          => '["Lenovo"]',
                'viewcount'     => null, 'slug'       => 'google-pixel-3-and-3-xl-rumors',
                'published'     => 'yes',
                'published_at'  => '2018-09-12',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null, 'created_at' => '2018-09-12 11:42:34',
                'deleted_at'    => null],

        ]);

        DB::table(config('litecms.blog.category.model.table'))->insert([
            ['id'           => '1', 'name' => 'Smartphones',
                'slug'          => 'smartphones',
                'status'        => 'show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-05-29 10:09:16',
                'deleted_at'    => null],
            ['id'           => '2',
                'name'          => 'General',
                'slug'          => 'general',
                'status'        => 'show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-09-12 07:31:29',
                'deleted_at'    => null],
            ['id'           => '4',
                'name'          => 'Business',
                'slug'          => 'business',
                'status'        => 'show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-09-12 11:34:34',
                'deleted_at'    => null],
            ['id'           => '5',
                'name'          => 'Electronic Gadgets',
                'slug'          => 'electronic-gadgets',
                'status'        => 'show',
                'user_type'     => 'App\\User',
                'user_id'       => '1',
                'upload_folder' => null,
                'created_at'    => '2018-09-12 11:36:52',
                'deleted_at'    => null],

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
